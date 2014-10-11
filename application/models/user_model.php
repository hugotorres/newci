<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_MODEL{
	
	function obtenerUsuario($username){
		$this->db->from('user');
		$this->db->where('username',$username);
		$q= $this->db->get();

		return $q->result();
	}

}