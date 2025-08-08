<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Alternative_model extends CI_model{
    public function __construct() {
        parent::__construct();
       $this->load->database();
    }
 public function get_alternate_orderflow_status($table)
    {
        $this->db->select('flow_status');  
        $this->db->from($table);
         $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->flow_status;
        } else {
            return 0 ; 
        }
    }

    public function check_phone_exist($table,$phone)
    {
        $this->db->select('user_id');
        $this->db->from($table);
        $this->db->where('mobile', $phone);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->user_id;
            } else {
                return 0 ;
                }
    }
}
?>