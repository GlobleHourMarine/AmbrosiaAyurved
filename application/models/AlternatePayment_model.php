<?php
Defined('BASEPATH') or exit('No direct script access allowed');
class AlternatePayment_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        }
    
            public function insert_payment_data($data)
    {
        file_put_contents(APPPATH . 'logs/final_data_check.log', print_r($data, true), FILE_APPEND);
        // file_put_contents(APPPATH . 'logs/final_data_With_User_data_check.log', print_r($user_id, true), FILE_APPEND);

        $paymentId = $this->get_payment_id();
        $detail = $data['paymentDetails'][0] ?? [];

        $merchantOrderId = $data['merchantOrderId'] ?? '';
        file_put_contents(APPPATH . 'logs/Check_merchantOrderId.log', print_r($merchantOrderId, true), FILE_APPEND);
        preg_match('/^(ORDER_\d+)UID(\d+)$/', $merchantOrderId, $matches);

        $merchantOrderId = $matches[1] ?? null;
        $user_id = $matches[2] ?? null;

        file_put_contents(APPPATH . 'logs/Check_merchantid.log', print_r($merchantOrderId, true), FILE_APPEND);
        file_put_contents(APPPATH . 'logs/Check_used_id.log', print_r($user_id, true), FILE_APPEND);

        $mainPayment = [
            'user_id'            => $user_id,
            'payment_id'         => $paymentId,
            'order_id'          => $merchantOrderId,
            'phonepe_order_id'   => $data['orderId'] ?? '',
            'status'              => $data['state'] ?? '',
            'amount'             => $data['amount'] ?? 0,
            'payable_amount'     => $data['payableAmount'] ?? 0,
            'fee_amount'         => $data['feeAmount'] ?? 0,
            'created_at'         => date('Y-m-d' . ' ' . 'H:i:s'),
            'date'               => date('Y-m-d'),
            'transaction_id'        => $detail['transactionId'] ?? '',
            'payment_mode'          => $detail['paymentMode'] ?? '',
            'ifsc_code'             => $detail['instrument']['ifsc'] ?? '',
            'account_type'          => $detail['instrument']['accountType'] ?? '',
            'rail_type'             => $detail['rail']['type'] ?? '',
            'utr_number'              => $detail['rail']['utr'] ?? '',
            'upi_transection_id'       => $detail['rail']['upiTransactionId'] ?? '',
        ];
        $this->db->insert('payment_table', $mainPayment);
        file_put_contents(APPPATH . 'logs/final_insert_array.log', print_r($mainPayment, true), FILE_APPEND);
    }

        public function insert_user_data($table, $data)
        {
             $this->db->insert($table, $data);
            if ($this->db->affected_rows() > 0) {
                return $this->db->insert_id();
            } else {
                // Log the actual database error
                $error = $this->db->error();
                file_put_contents(APPPATH . 'logs/db_errors.log', 
                    "User Insert Error: " . print_r($error, true) . "\nData: " . print_r($data, true), 
                    FILE_APPEND);
                return false;
            }
        }

        public function insert_address_data($table, $data)
        {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }



}


?>