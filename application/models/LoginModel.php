<?php


/**
 * 
 */

class LoginModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function validate($request)
	{

		$this->db->select('u.id, u.nombre, p.nombres, p.primer_apellido, p.segundo_apellido, u.id_persona'); 
		$this->db->from('usuarios u'); 
		$this->db->join('personas p','p.id = u.id_persona');
		$this->db->where('u.nombre',$request['nombre']); 
		$this->db->where('u.clave',$request['clave']); 

		$resultado = $this->db->get();
		
		// print_r($resultado->row());

		if($resultado->num_rows() == 1){
			$resultado_query = $resultado->row();
			// print_r($resultado_query->segundo_apellido);
			$session_usuario = array( 
									  'id'=>$resultado_query->id,
									  'id_persona'=>$resultado_query->id_persona,
									  'nombre'=>$resultado_query->nombre,
									  'nombres'=>$resultado_query->nombres,
									  'primer_apellido'=>$resultado_query->primer_apellido,
									  'segundo_apellido'=>$resultado_query->segundo_apellido
								);
			// print_r($session_usuario);
			$this->session->set_userdata($session_usuario);
			// $this->session->userdata($session_usuario); //Funcion propia de codeigniter

			return 1 ;
		}else{

			return 0 ;

		}

			
	}		
}

