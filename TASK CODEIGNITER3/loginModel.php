<?php
class loginModel extends CI_Model{
    public function updateData($data,$id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->update($data,'collegelogin');
    }
    public function editdata($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('collegelogin')->result();
    }
    public function insertdata($data){
        //echo 'hi';
        //print_r($data);
        $this->load->database();
        return $this->db->insert('collegelogin',$data);
    }
    public function getRecord(){
        $this->load->database();
        return $this->db->get('collegelogin')->result();
    }
}