<?php
class Main_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    public function select_query($myquery){
        return $this->db->query($myquery)->result_array();
    }
 
	public function Insert($table,$data){
        $ins=$this->db->insert($table,$data);
        if($ins){
            return $this->db->insert_id();
        }
    }
	public function delete($table,$con){
        $this->db->delete($table,$con);
    }
	public function update($table,$data,$condition){
        $this->db->update($table,$data,$condition);
    }
}