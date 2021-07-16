<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_MyActivity extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

   public function getData()
   {
       $this->db->select("*");
       $this->db->from("tbl_detail");
       $data = $this->db->get();
       return $data->result_array();
   }
   public function getDataById($id)
   {
       $this->db->select("*");
       $this->db->from("tbl_detail");
       $this->db->where('id',$id);
       $data = $this->db->get();
       return $data->row_array();
   }

   public function insert($data)
   {
     return $this->db->insert('tbl_detail',$data);
   } 

   public function update($id,$data)
   {
     $this->db->where('id',$id);
     return $this->db->update('tbl_detail',$data);
   }

   public function delete($id)
   {
       $this->db->where('id',$id);
       return $this->db->delete('tbl_detail');
   }
}