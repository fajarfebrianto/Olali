<?php
/**
*
*/
class M_dafpesan extends CI_Model{

	public function getpesan($where=""){
		$data = $this->db->query('select * from pesanan '.$where);
		return $data->result_array();
		
	}
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
}