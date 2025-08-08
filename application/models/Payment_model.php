<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Payment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_payment_data($data)
    {
        file_put_contents(APPPATH . 'logs/final_data_check.log', print_r($data, true), FILE_APPEND);
        // file_put_contents(APPPATH . 'logs/final_data_With_User_data_check.log', print_r($user_id, true), FILE_APPEND);

        $paymentId = $this->get_payment_id();
        $detail = $data['paymentDetails'][0] ?? [];

        $mainPayment = [
            'payment_id'         => $paymentId,
            'order_id'          => $data['merchantOrderId'] ?? '',
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
    
    public function get_payment_status($merchantOrderId)
    {
        return $this->db->select('*')->from('payment_table')->where('order_id', $merchantOrderId)->get()->result();
    }

    public function get_payment_id()
    {
        $this->db->select_max('payment_id');
        $query = $this->db->get('payment_table');
        $result = $query->row_array();

        $lastId = isset($result['payment_id']) ? (int)$result['payment_id'] : 999;

        return $lastId + 1;
    }

    public function get_user_id()
    {
        $user_id = $this->session->userdata('user_id');
        file_put_contents(APPPATH . 'logs/insert_user_id_with_payment.log', print_r($user_id, true), FILE_APPEND);
        return $user_id;
    }



    public function get_user_by_id($user_id)
    {
        return $this->db->get_where('user_table', ['user_id' => $user_id])->row();
    }

    public function get_single_record($table, $product_id)
    {
        return $this->db->get_where($table, ['product_id' => $product_id])->row();
    }

    public function insert_user_id($order_id, $user_id)
    {
        $res = $this->db->where('order_id', $order_id)->update('payment_table', ['user_id' => $user_id]);
        return $res;
    }

}
