<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//que me redireccione a la sesion iniciada si existe
		if($this->session->userdata('username')){
			redirect('habitaciones');
		}
		//si existe la variables enviadass x formulario
		if(isset($_POST['password'])){
		$this->load->model('usuario_model');
		//md5 encriptar el password
			if($this->usuario_model->login($_POST['username'],md5($_POST['password']))){
				$this->session->set_userdata('username',$_POST['username']); //paso el dato si existe x el metodo post
				redirect('habitaciones');
			}else{
				redirect('login');
			}
		}
		$this->load->view('login');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Portal/Inicio');
	}

}