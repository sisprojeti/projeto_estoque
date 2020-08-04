<?php

namespace Models;

use \Core\Model;

class Membros extends Model {

	public function getList() {
		$data = array();

		$sql = $this->db->query("SELECT * FROM ficha_membros");

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	}
	public function add($igreja_local,$nome,$dt_nasc,$naturalidade,$est_civil,$nome_conjuge,$pai,$mae,$escolaridade,$curso,$profissao,$rg,$cpf,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$cep,$tel,$pt_religiao,$desc_religiao,$batismo,$igreja_batismo,$batismo_esp,$batismo_esp_quando,$nesta_igreja,$qd_nesta_igreja,$situacao,$obs){
		$sql = $this->db->prepare("INSERT INTO ficha_membros SET igreja_local = :igreja_local, nome = :nome, dt_nasc = :dt_nasc, naturalidade = :naturalidade, est_civil = :est_civil, nome_conjuge = :nome_conjuge, pai = :pai, mae = :mae, escolaridade = :escolaridade, curso = :curso, profissao = :profissao, rg = :rg, cpf = :cpf, logradouro = :logradouro, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, uf = :uf, cep = :cep, tel = :tel, pt_religiao = :pt_religiao, desc_religiao = :desc_religiao, batismo = :batismo, igreja_batismo = :igreja_batismo, batismo_esp = :batismo_esp, batismo_esp_quando = :batismo_esp_quando, nesta_igreja = :nesta_igreja, qd_nesta_igreja = :qd_nesta_igreja, situacao = :situacao, obs = :obs");
		$sql->bindValue(":igreja_local", $igreja_local);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":dt_nasc", $dt_nasc);
		$sql->bindValue(":naturalidade", $naturalidade);
		$sql->bindValue(":est_civil", $est_civil);
		$sql->bindValue(":nome_conjuge", $nome_conjuge);
		$sql->bindValue(":pai", $pai);
		$sql->bindValue(":mae", $mae);
		$sql->bindValue(":escolaridade", $escolaridade);
		$sql->bindValue(":curso", $curso );
		$sql->bindValue(":profissao",  $profissao);
		$sql->bindValue(":rg",  $rg);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":logradouro", $logradouro);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":complemento",  $complemento);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":pt_religiao", $pt_religiao);
		$sql->bindValue(":desc_religiao", $desc_religiao);
		$sql->bindValue(":batismo", $batismo);
		$sql->bindValue(":igreja_batismo", $igreja_batismo);
		$sql->bindValue(":batismo_esp", $batismo_esp);
		$sql->bindValue(":batismo_esp_quando", $batismo_esp_quando);
		$sql->bindValue(":nesta_igreja", $nesta_igreja);
		$sql->bindValue(":qd_nesta_igreja",  $qd_nesta_igreja);
		$sql->bindValue(":situacao",$situacao);
		$sql->bindValue(":obs", $obs);
		$sql->execute();
		
	}

	public function getInfo($id){
		$data = array();

		$sql = $this->db->prepare("SELECT * FROM ficha_membros WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetch();
		}

		return $data;

	}
} // End of Model