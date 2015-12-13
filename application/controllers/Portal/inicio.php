<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{

		$this->load->view('portalWeb/index');
	}
	public function blog(){
		$this->load->view('portalWeb/blog');
	}
	public function booking(){
		$this->load->view('portalWeb/booking');
	}
	public function contacto(){
		$this->load->view('portalWeb/contacto');
	}
	public function contactanos(){
		$this->load->view('portalWeb/contactanos');
	}
	public function galeria(){
		$this->load->view('portalWeb/galeria-simple');
	}
	public function habitacion(){
		$this->load->view('portalWeb/habitacion');
	}
	public function listadoTres(){
		$this->load->view('portalWeb/listado3');
	}
	public function listadoCuatro(){
		$this->load->view('portalWeb/listado4');
	}
	public function reserva(){
		$this->load->view('portalWeb/reserva');
	}
	public function simple(){
		$this->load->view('portalWeb/simple');
	}
        
        /*
         * Comentario para ver el funcionamiento del commit
         */


}