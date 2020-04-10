<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //listing Pendaftaran
    public function listUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function user_detail()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'user.email'    => $this->session->userdata('email')
        ));
        $query = $this->db->get();
        return $query->row();
    }
}
