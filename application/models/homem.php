<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homem extends CI_Model {


	public function mostrar()
	{

		$sql = $this->db->query("SELECT * FROM personas");
		return $sql;
	}

	public function insertar($data)//paso el data del arreglo del controlador en su metodo insertar
	{

		$this->db->insert('personas',$data);
	}

	public function eliminar($id){
		$this->db->where("id",$id);
		$this->db->delete('personas');

	}

	public function editar($id){
		$this->db->where("id",$id);
		return $this->db->get('personas');
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		$this->db->update('personas',$data);
	}
}
