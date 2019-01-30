<?php
 // if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		// Por lo general se cargan las librerias
		parent::__construct();
		$this->load->library('encrypt');

		$this->load->model('LoginModel');
	}
	
	public function index() // funcion por default
	{	
		$data['mensaje'] = '';
		$this->load->view('login/LoginView',$data);
	}


	public function validatelogin() // recibe Usuario y contraseña
	{
		$requestLogin = [];

		$requestLogin['nombre'] = $this->input->post('usuario');
		$requestLogin['clave'] = $this->encrypt->sha1($this->input->post('pass')); 	

		$res = $this->LoginModel->validate($requestLogin); 	

		if($res == 1)
		{
			$this->load->view('layout/header');
			$this->load->view('layout/menu');			
			$this->load->view('persona/HomeView');
			$this->load->view('layout/menu');
		}
		else
		{	
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('login/LoginView',$data);
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */