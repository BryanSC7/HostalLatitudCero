<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar extends CI_Controller{

	public function index(){
		$this->load->view('menus/sidebar');
	}

}