<?php


/**
 * 
 */

class CiudadModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getCiudades($request)
	{
		$s = $this->db->get_where('ciudad', array('sitReg' => $request));	
		return $s->result();
	}

	
}

