<?php


/**
 * 
 */

class PersonaModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($request)
	{
		$this->db->insert('personas',$request); // db -> Es una funcion de Codeigniter que ayuda 
		return $this->db->insert_id();		
	}

	public function update($request)
	{	
		$this->db->update('personas',$request);
		$this->db->where('id',$this->session->userdata('id_persona'));
		return 1;
	}	

	public function delete($idpersona)
	{
		$this->db->where('id',$idpersona);
		$this->db->delete('personas');
	}

}

