<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('homem');
		//$this->has_many['posts'] = 'Post_model';
	}

	public function index()
	{
		$data['sql1'] = $this->homem->mostrar();
		$this->load->view('header');
		$this->load->view('ver',$data);
		$this->load->view('footer');
	}

	public function agregar()
	{
		$data['op'] = 'otro';
		$this->load->view('header');
		$this->load->view('formulario',$data);
		$this->load->view('footer');
	}

	public function insertar()
	{
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$direccion = $this->input->post('direccion');
		$data = array(
			'nombre' 	=> $nombre,
			'direccion' => $direccion
			);
		if($op=="otro"){
		$this->homem->insertar($data);
	}else{
		$this->homem->update($id,$data);
	}
		redirect('home');

	}

	public function eliminar($id){ //le paso el id del formulario
		$this->homem->eliminar($id);
		redirect('home');
	}

	public function editar($id){
		$data['op'] = 'editar';
		$data['sql'] = $this->homem->editar($id);
		$this->load->view('header');
		$this->load->view('formulario', $data);
		$this->load->view('footer');

	}

	public function plantilla(){

		$this->load->view('head');
		$this->load->view('pie');
	}

	public function nosotros(){
		$this->load->view('us');
	}

	public function tema(){
		$this->load->view('index');
	}
}
