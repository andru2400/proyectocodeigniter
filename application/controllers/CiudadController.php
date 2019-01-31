<?php
 // if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CiudadController extends CI_Controller {

	function __construct()
	{
		// Por lo general se cargan las librerias
		parent::__construct();
		$this->load->model('CiudadModel');
	
	}

	// public function index() // funcion por default
	// {	
		
	// }
	
	public function getCiudades() // recibe Usuario y contraseña
	{
		$s = $this->input->post('sitReg');				
		$resultado = $this->CiudadModel->getCiudades($s);

		echo json_encode($resultado);

	}
}
