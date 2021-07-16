<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function checkLogin($username, $password){
        $checkUsername=$this->db->query("SELECT * FROM tbl_user WHERE username='$username'");
        if($checkUsername->num_rows()>0){
            $check = $this->db->query("SELECT id_user, nama_user, username FROM tbl_user WHERE username='$username' AND password='$password'");

            if($check->num_rows()>0){
                return $check->row_array();
            }
            $data['result']="username";
            return $data;
        }
        $data['result']="username";
        return $data;
    }
}