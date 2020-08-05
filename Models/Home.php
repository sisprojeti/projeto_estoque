<?php

namespace Models;

use \Core\Model;

class Home extends Model {

	public function getQuantOfMembros(){
		$data = 0;

		$sql = $this->db->query("SELECT id FROM ficha_membros ");

		if($sql->rowCount() > 0){
			$data = $sql->rowCount();
		}

		return $data;
	}

	public function getQuantOfMembrosIna(){
		$data = 0;

		$sql = $this->db->query("SELECT * from ficha_membros WHERE situacao = 'Inativo' ");

		if($sql->rowCount() > 0){
			$data = $sql->rowCount();
		}

		return $data;
	}

	public function getQuantOfMembrosAti(){
		$data = 0;

		$sql = $this->db->query("SELECT * from ficha_membros WHERE situacao = 'Ativo' ");

		if($sql->rowCount() > 0){
			$data = $sql->rowCount();
		}

		return $data;
	}
		
} // End of Model