<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index() // funcion por default
	{
		$this->load->view('TestView');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */