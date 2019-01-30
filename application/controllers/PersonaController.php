<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PersonaController extends CI_Controller {

	function __construct()
	{
		// Por lo general se cargan las librerias
		parent::__construct();		
		$this->load->library('encrypt');

		$this->load->model('PersonaModel');
		$this->load->model('UsuarioModel');
	}
	
	public function index() // funcion por default
	{
		$this->load->view('persona/registrarPersonaView');
	}

	public function store()
	{	
		$requestPersona = [];		
		$requestUsuario = [];		

		//persona	
		$requestPersona['dni'] = $this->input->post('dni'); 
		$requestPersona['nombres'] = $this->input->post('nombres'); 
		$requestPersona['primer_apellido'] = $this->input->post('primer_apellido'); 
		$requestPersona['segundo_apellido'] = $this->input->post('segundo_apellido'); 
		$requestPersona['email'] = $this->input->post('email'); 
		$requestPersona['fecha_nacimiento'] = $this->input->post('fecha_nacimiento'); 

		// //Usuario
		$requestUsuario['nombre'] = $this->input->post('usuario'); 
		$requestUsuario['clave'] = $this->encrypt->sha1($this->input->post('pass')); 	

		$personaId = $this->PersonaModel->save($requestPersona); // Se carga de lo que devuelve el modelo.
		if($personaId > 0){
			 $requestUsuario['id_persona'] = $personaId;
			 $this->UsuarioModel->save($requestUsuario);

			 redirect('PersonaController/index');
		}
	

			
	}

	public function actualize()
	{
		$requestPersona = [];		
		$requestUsuario = [];

		$requestPersona['nombres'] = $this->input->post('nombres'); 
		$requestPersona['primer_apellido'] = $this->input->post('primer_apellido'); 
		$requestPersona['segundo_apellido'] = $this->input->post('segundo_apellido'); 
		$requestPersona['email'] = $this->input->post('email');

		$this->PersonaModel->update($requestPersona); 

		// $this->load->view('persona/personaView');
		redirect('PersonaController/index');	
	}

	public function destroy()
	{
		$idp =  $this->input->post('id_persona');

		$this->UsuarioModel->delete($idp);
		$this->PersonaModel->delete($idp);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */