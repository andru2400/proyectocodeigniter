<?php


/**
 * 
 */

class UsuarioModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($request)
	{
		$this->db->insert('usuarios',$request); // db -> Es una funcion de Codeigniter que ayuda 
		return true;	
	}

	public function delete($idp)
	{	
		$this->db->where('id_persona',$idp);
		$this->db->delete('usuarios');
		
	}


}

