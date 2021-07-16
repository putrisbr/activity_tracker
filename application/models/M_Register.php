<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Register extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function checkUsername($username){
        $query=$this->db->query("SELECT * FROM tbl_user WHERE username='$username'");
        $cek=$query->num_rows();
        if($cek>0){
            return true;
        }
        return false;
    }

    public function insertDataUser($data){
        return $this->db->insert('tbl_user', $data);
    }

    public function update($id_user,$data)
    {
        $this->db->where('id_user',$id_user);
     return $this->db->update('tbl_user',$data);
    }
}