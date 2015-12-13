<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Habitaciones extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('habitacionmod');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['sql2'] = $this->habitacionmod->mostrar();
		$this->load->view('header');
		//$this->load->view('menus/sidebar');
		$this->load->view('habitacionview',$data);
		$this->load->view('footer');
	}

	public function agregar()
	{
		$data['op'] = 'otro';
		$this->load->view('header');
		$this->load->view('formview',$data);
		$this->load->view('footer');
	}

	public function insertar()
	{
		$op = $this->input->post('op');
		$IdHabitacion = $this->input->post('IdHabitacion');
		$Numero = $this->input->post('Numero');
		$Piso = $this->input->post('Piso');
		$Descripcion = $this->input->post('Descripcion');
		$Caracteristicas = $this->input->post('Caracteristicas');
		$Precio = $this->input->post('Precio');
		$TipoHabitacion = $this->input->post('TipoHabitacion');
		$Estado = $this->input->post('Estado');
		$data = array(
			'Numero' 			=> $Numero,
			'Piso' 				=> $Piso,
			'Descripcion' 		=> $Descripcion,
			'Caracteristicas' 	=> $Caracteristicas,
			'Precio' 			=> $Precio,
			'TipoHabitacion' 	=> $TipoHabitacion,
			'Estado' 			=> $Estado
			);
		if($op=="otro"){
		$this->habitacionmod->insertar($data);
	}else{
		$this->habitacionmod->update($IdHabitacion,$data);
	}
		redirect('Habitaciones');
	}

	public function eliminar($IdHabitacion){ //le paso el id del formulario
		$this->habitacionmod->eliminar($IdHabitacion);
		redirect('Habitaciones');
	}

	public function editar($IdHabitacion){
		$data['op'] = 'editar';
		$data['sql2'] = $this->habitacionmod->editar($IdHabitacion);
		$this->load->view('header');
		$this->load->view('formview', $data);
		$this->load->view('footer');
	}
}