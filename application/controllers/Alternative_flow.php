<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Alternative_flow extends CI_Controller
{

    private $api_key = '7febeab1-6c5f-11f0-a562-0200cd936042'; // Replace with your actual key

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->model('admin_model');
        $this->load->model('alternative_model');
        //   $this->load->helper('cookie');
        // $this->load->library('session');
        // $this->load->model('usermodel');
        $this->load->model('Payment_model');
        $this->load->model('Order_model');
        $this->load->model('AlternatePayment_model');
        // $this->load->library('session');
    }
    public function verify_ambrosia_user()
    {
        $phone = $this->input->post('phone');
        $this->session->set_userdata('user_phone', $phone);
        
        if (empty($phone)) {
            echo json_encode(['success' => false, 'message' => 'Please provide valid phone']);
            return;
        }
        $user=$this->alternative_model->check_phone_exist('user_table',$phone);
        if ($user) {
            $this->session->set_userdata('user_id',$user);
            $this->session->set_userdata('user_exist',true);

            // echo json_encode(['success' => true, 'message' => 'User already exists']);
        }
         $url = "https://2factor.in/API/V1/{$this->api_key}/SMS/{$phone}/AUTOGEN/OTP1";
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        if (!empty($result['Status']) && $result['Status'] === 'Success') {
            // $session_id_by_api=json_encode[('session_id' => $result['Details'])];
            $this->session->set_userdata('otp_session_id', $result['Details']);
            //  echo json_encode(['success' => true, 'message' => 'OTP would be sent']);
           echo json_encode([
                    'success' => 'true',
                    'session_id' => $result['Details'],
                    'message' => "✅ OTP sent to {$phone}"
                ]) ;
        }
        else{
            echo json_encode(['success' => false, 'message' => 'Failed to send OTP']);
        }
    }
public function verify_ambrosia_user_otp()
{
    $this->output->set_content_type('application/json');
    // Fetch raw JSON input
    $json = file_get_contents('php://input');
     $session_id = $this->session->userdata('otp_session_id');
     $data = json_decode($json, true);
    $otp = $data['otp'] ?? '';
     if (empty($otp)) {
        echo json_encode(['success' => false, 'message' => 'Please enter OTP']);
        return;
    }

    $url = "https://2factor.in/API/V1/{$this->api_key}/SMS/VERIFY/{$session_id}/{$otp}";
    $response = @file_get_contents($url);
    $result = json_decode($response, true);

    if (!empty($result['Status']) && $result['Status'] === 'Success') {
         $this->session->set_userdata('otp_verified', true);
        echo json_encode(['success' => true, 'message' => 'OTP verified successfully !']);
    }
    else {
        echo json_encode(['success' => false, 'message' => 'Invalid OTP']);
    }
    

    // $email = $data['email'] ?? '';
    // $sended_otp = '123011'; // Hardcoded for testing

   
    // if ($otp === $sended_otp) {
    //     $this->session->set_userdata('otp_verified', true);
    //     echo json_encode(['success' => true, 'message' => 'OTP verified successfully']);
    // } 
}

public function debug_session_data()
{
    $this->output->set_content_type('text/plain'); // Optional: cleaner output

    echo "Session Data:\n\n";
    print_r($this->session->all_userdata());
}
public function save_address() {
    // 1. Check AJAX request
    if (!$this->input->is_ajax_request()) {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => false, 'message' => 'Invalid request']));
        return;
    }
    
    // 2. Get and validate input data
    $addressData = [
        'first_name' => $this->input->post('firstName', true),
        'last_name' => $this->input->post('lastName', true),
        'email' => $this->input->post('email', true),
        'pincode' => $this->input->post('pincode', true),
        'city' => $this->input->post('city', true),
        'state' => $this->input->post('state', true),
        'address' => $this->input->post('address', true),
    ];
    
    // 3. Validate inputs
    $errors = [];
    foreach ($addressData as $key => $value) {
        if (empty($value)) {
            $errors[] = ucfirst(str_replace('_', ' ', $key)) . ' is required';
        }
    }
    
    if (!empty($errors)) {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => false, 'message' => implode(', ', $errors)]));
        return;
    }

    if (!filter_var($addressData['email'], FILTER_VALIDATE_EMAIL)) {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => false, 'message' => 'Invalid email format']));
        return;
    }

    if (!preg_match('/^\d{6}$/', $addressData['pincode'])) {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => false, 'message' => 'Pincode must be 6 digits']));
        return;
    }

    // 4. Store in session
    $this->session->set_userdata('shipping_address', $addressData);
    $user_phone = $this->session->userdata('user_phone') ?? '';

    // 5. Handle user creation
    $user_id = $this->session->userdata('user_id') ?? '';
    $is_user_exist = $this->session->userdata('user_exist') ?? false;

    if (empty($user_id) && !$is_user_exist) {
        $user_data = [
            'fname' => $addressData['first_name'],
            'lname' => $addressData['last_name'],
            'mobile' => $user_phone ?: 'na',
            'email' => $addressData['email'],
            'city' => $addressData['city'],
            'state' => $addressData['state'],
            'country' => 'India',
            'pincode' => $addressData['pincode'],
            'address' => $addressData['address'],
        ];

        $user_id = $this->AlternatePayment_model->insert_user_data('user_table', $user_data);
        
        if (!$user_id) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['success' => false, 'message' => 'Failed to create user account']));
            return;
        }
        
        $this->session->set_userdata([
            'user_id' => $user_id,
            'user_exist' => true
        ]);
    }

    // 6. Create address record
    $address_data = [
        'user_id' => $user_id,
        'fname' => $addressData['first_name'],
        'lname' => $addressData['last_name'],
        'mobile' => $user_phone ?: '',
        'address' => $addressData['address'],
        'city' => $addressData['city'],
        'state' => $addressData['state'],
        'country' => 'India',
        'pincode' => $addressData['pincode'],
    ];

    $address_id = $this->AlternatePayment_model->insert_address_data('user_address', $address_data);
    
    if (!$address_id) {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => false, 'message' => 'Address creation failed']));
        return;
    }

    // 7. Return success
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode([
            'success' => true, 
            'user_id' => $user_id
        ]));
}

// public function get_user_id()
// {
//     $user_id = $this->session->userdata('user_id');
//     if (!empty($user_id)) {
//         echo json_encode(['success' => true, 'user_id' => $user_id]);
//     } else {
//         echo json_encode(['success' => false, 'message' => 'User ID not set']);
//     }
// }

}
?>