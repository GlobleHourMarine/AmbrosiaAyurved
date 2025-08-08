
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Output $output
 * @property CI_Uri $uri
 * @property CI_Pagination $pagination
 * @property CI_Session $session
 * @property CI_Upload $upload
 * @property CI_Security $security
 * @property CI_DB $db
 * @property CI_Email $email
 * @property Your_model_name $api_model
 * @property Your_model_name $Usermodel
 * @property Your_model_name $Investment_model
 * @property Your_model_name $package_model
 */

class PaymentApi extends CI_Controller
{
    protected $token;
    public function __construct()
    {
        parent::__construct();
        $this->load->config('PhonePe');
        $this->load->model('api_model');
        $this->load->model('tracking_model');
        $this->load->model('admin_model');
        $this->load->model('Payment_model');
        $this->load->model('Usermodel');
        if (!$this->token) {
            $this->phonepe_auth_token();
        }
    }

    public function phonepe_auth_token()
    {
        header('Content-Type: application/x-www-form-urlencoded');
        $client_id = $this->config->item('client_id');
        $client_secret = $this->config->item('client_secret');
        $client_version = $this->config->item('client_version');

        $postData = http_build_query([
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'client_version' => $client_version,
            'grant_type' => 'client_credentials'
        ]);

        $ch = curl_init("https://api.phonepe.com/apis/identity-manager/v1/oauth/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/x-www-form-urlencoded",
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if(curl_error($ch))
        {
            echo json_encode(['success' => false, 'message' => 'Curl Error: ' . curl_error($ch)]);
        }
        else{
            $data = json_decode($response, true);
            $this->token = $data['access_token'];
        } 
    }

        public function create_order() {
        header('Content-Type: application/json');
        $input_data = json_decode(file_get_contents('php://input'), true);
        $this->load->helper('url');
        $this->load->helper('security'); 

        $amount = isset($input_data['amount']) ? $input_data['amount'] : null;
        if (!$amount) {
            echo json_encode(['success' => false, 'message' => 'Missing required fields']);
            return;
        }
        $payload = [
            "merchantOrderId" => 'ORDER_'.time(),
            "amount" => (int)$amount,
            "paymentFlow" => [
                "type" => "PG_CHECKOUT"
            ]
        ];

        $jsonData = json_encode($payload);

        $accessToken = $this->token;

        $ch = curl_init("https://api.phonepe.com/apis/pg/checkout/v2/sdk/order");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: O-Bearer $accessToken"
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            echo json_encode(['success' => false, 'message' => 'Curl Error: ' . curl_error($ch)]);
        } else {
            $response = json_decode($response, true);
            $data = [
                'response' => $response,
                'payload' => $payload,
            ];
            echo json_encode([
                'success' => true,
                'data' => $data,
            ]);
        }
        curl_close($ch);
    }

    public function save_phonepe_data()
{
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input_data = json_decode(file_get_contents('php://input'), true);

        // Debug log
        log_message('debug', 'PhonePe raw input: ' . print_r($input_data, true));

        $user_id  = isset($input_data['user_id']) ? $input_data['user_id'] : null;
        $order_id = isset($input_data['order_id']) ? $input_data['order_id'] : null;

        if (!$user_id || !$order_id) {
            echo json_encode(['success' => false, 'message' => 'Missing required fields']);
            return;
        }

        $res = $this->Payment_model->insert_user_id($order_id, $user_id);

        if ($res) {
            echo json_encode(['success' => true, 'message' => 'Data saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to save data']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    }
}

    //     public function CallbackData()
    // {
    //     $this->load->model('Payment_model');

    //     define('PHONEPE_WEBHOOK_USERNAME', 'AmbrosiaAyurved');
    //     define('PHONEPE_WEBHOOK_PASSWORD', 'Ambrosia123');

    //     function getExpectedAuthHeader($username, $password)
    //     {
    //         return hash('sha256', $username . ':' . $password);
    //     }

    //     $headers = getallheaders();
    //     $headers['Authorization'] = "3135735958ebcdc28a3e6665699d09ea5645fbca17db5ed7374fa4f5be0ecbee";
    //     $incomingAuth = $headers['Authorization'] ?? $headers['authorization'] ?? null;
    //     $expectedAuth = getExpectedAuthHeader(PHONEPE_WEBHOOK_USERNAME, PHONEPE_WEBHOOK_PASSWORD);

    //     if (!$incomingAuth || trim($incomingAuth) !== $expectedAuth) {
    //         file_put_contents(APPPATH . 'logs/flutter/webhook_auth.log', "Auth failed\n", FILE_APPEND);
    //         http_response_code(403);
    //         exit('Invalid or missing Authorization');
    //     }

    //     $rawPayload = file_get_contents('php://input');
    //     file_put_contents(APPPATH . 'logs/flutter/debug_raw.log', $rawPayload, FILE_APPEND);

    //     $payload = json_decode($rawPayload, true);
    //     file_put_contents(APPPATH . 'logs/flutter/debug.log', "Decoded:\n" . print_r($payload, true), FILE_APPEND);

    //     file_put_contents(APPPATH . 'logs/flutter/Data_form_Flutter_app.log', print_r($payload, true), FILE_APPEND);




    //     $paymentData = $payload['payload'] ?? null;
    //     $orderState = $paymentData['state'] ?? null;

    //     // Only continue if state is COMPLETED or FAILED
    //     if ($orderState === 'COMPLETED' || $orderState === 'FAILED') {
    //         file_put_contents(
    //             APPPATH . 'logs/flutter/phonepe_check.log',
    //             date('Y-m-d H:i:s') . " | State: $orderState | Full: " . json_encode($payload) . "\n\n",
    //             FILE_APPEND
    //         );
    //         $url = site_url('PaymentApi/saved_payment_data'); // No base_url here
    //         $headers = ['Content-Type: application/json'];

    //         $ch = curl_init($url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         curl_setopt($ch, CURLOPT_POST, true);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paymentData));

    //         $response = curl_exec($ch);

    //         // ✅ cURL error handling
    //         if ($response === false) {
    //             $error = curl_error($ch);
    //             file_put_contents(APPPATH . 'logs/flutter/curl_error.log', "cURL Error: $error\n", FILE_APPEND);
    //         } else {
    //             file_put_contents(APPPATH . 'logs/flutter/internal_api_response.log', $response . "\n", FILE_APPEND);
    //         }

    //         curl_close($ch);

    //         http_response_code(200);
    //         echo ($orderState === 'COMPLETED') ? 'Payment success' : 'Payment failed';
    //     }
    // }

    // public function saved_payment_data()
    // {

    //     $this->load->model('Payment_model');
    //     $json = file_get_contents('php://input');
    //     $data = json_decode($json, true);
    //     //    $data['user_id'] = $this->session->userdata('user_id');
    //     // $data = [
    //     //     'user_id' => $this->session->userdata('user_id'),
    //     // ];
    //     // Logging
    //     file_put_contents(APPPATH . 'logs/flutter/.saved_payment_datalog.log', print_r($data, true), FILE_APPEND);

    //     // Store in DB
    //     if (!empty($data)) {
    //         file_put_contents(APPPATH . 'logs/flutter/insert_data_debug.log', "Inserting...\n", FILE_APPEND);
    //         $this->Payment_model->insert_app_payment_data($data);
    //     }

    //     echo json_encode(['status' => 'received', 'success' => true]);
    // }

}