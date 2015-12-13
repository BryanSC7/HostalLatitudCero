<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validacion extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('validar');
	}

	public function confirmar(){
		$FormRules = array(
			array(
				'field' => 'website',
				'label' => 'Website',
				'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($FormRules);
		if ($this->form_validation->run() == TRUE){
			//validado correctamente
			echo 'exito';
		}else{
			//error de validacion
			echo '<div class="error">'.validation_errors().'</div>';
		}
	}


}