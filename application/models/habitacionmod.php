<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Habitacionmod extends CI_Model{

	public function mostrar()
	{

		$sql = $this->db->query("SELECT * FROM habitacion");
		return $sql;
	}

	public function insertar($data)//paso el data del arreglo del controlador en su metodo insertar
	{

		$this->db->insert('habitacion',$data);
	}

	public function eliminar($IdHabitacion){
		$this->db->where("IdHabitacion",$IdHabitacion);
		$this->db->delete('habitacion');

	}

	public function editar($IdHabitacion){
		$this->db->where("IdHabitacion",$IdHabitacion);
		return $this->db->get('habitacion');
	}

	public function update($IdHabitacion,$data){
		$this->db->where("IdHabitacion",$IdHabitacion);
		$this->db->update('habitacion',$data);
	}
}