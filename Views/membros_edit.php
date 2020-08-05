<?php 
function selected( $value, $selected ){
    return $value==$selected ? ' selected="selected"' : '';
}

 ?>


<body>
	<!-- Conteudo da Pagina -->
<section class="content-header">
<h1>
	Membros <i class="fa fa-"></i>
</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">
<form action="<?php echo BASE_URL ?>membros/edit_action/<?php echo $info['id'] ?>" method="POST" accept-charset="utf-8">	
	<div class="box">
		<div class="box-header">
			<div class="box-tilte">
			 Membros - Editar	
			</div>
			<div class="box-tools">
				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
		</div>
		<div class="box-body">

				<div class="form-row">

				<div class="col-md-12">
					Igreja Local Em: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="igreja_local" value="<?php echo $info['igreja_local'] ?>"required><br>
				</div>

				<div class="col-md-12">
					Nome: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="nome" required value="<?php echo $info['nome'] ?>"  autofocus><br>
				</div>

				<div class="col-md-4">
					Data de Nascimento: <i class="fa fa-"></i>
					<input class="form-control" type="date" name="dt_nasc" value="<?php echo $info['dt_nasc'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					Naturalidade: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="naturalidade" value="<?php echo $info['naturalidade'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					Estado Civil: <i class="fa fa-"></i>
					<select name="est_civil" class="form-control" id="inputEstadoCivil">

						<option selected value=""><?php echo $info['est_civil'] ?></option>
					    <option value="Solteiro">Solteiro</option>
					    <option value="Casado">Casado</option>
					    <option value="Separado">Separado</option>
					    <option value="Divorciado">Divorciado</option>
					    <option value="Viúvo">Viúvo</option>
					    <option value="Amasiado">Amasiado</option>
					</select><br>
				</div>

				<div class="col-md-12">
					Nome do Cônjuge: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="nome_conjuge" value="<?php echo $info['nome_conjuge'] ?>"  required ><br>
				</div>

				<div class="col-md-6">
					Pai: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="pai" value="<?php echo $info['pai'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Mãe: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="mae" value="<?php echo $info['mae'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Escolaridade: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="escolaridade" value="<?php echo $info['escolaridade'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Curso: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="curso" value="<?php echo $info['curso'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					Profissão: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="profissao" value="<?php echo $info['profissao'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					RG: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="rg" value="<?php echo $info['rg'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					CPF: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $info['cpf'] ?>" required ><br>
				</div>

				<div class="col-md-4">
					CEP: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="cep" id="cep" value="<?php echo $info['cep'] ?>" required ><br>
				</div>

				<div class="col-md-8">
					Logradouro: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="logradouro" id="logradouro" value="<?php echo $info['logradouro'] ?>" required ><br>
				</div>


				<div class="col-md-2">
					Número: <i class="fa fa-"></i>
					<input class="form-control" type="number" name="numero" id="numero" value="<?php echo $info['numero'] ?>" required ><br>
				</div>

				<div class="col-md-3">
					Complemento: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="complemento" id="complemento" value="<?php echo $info['complemento'] ?>" required ><br>
				</div>

				<div class="col-md-2">
					Bairro: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="bairro" id="bairro" value="<?php echo $info['bairro'] ?>" required ><br>
				</div>

				<div class="col-md-3">
					Cidade: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $info['cidade'] ?>" required ><br>
				</div>

				<div class="col-md-2">
					UF: <i class="fa fa-"></i>
					<select class="form-control" name="uf" id="uf">
						<option value=""><?php echo $info['uf'] ?></option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select><br>
				</div>

				<div class="col-md-6">
					Telefone/Celular: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="tel" id="tel" value="<?php echo $info['tel'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Pertenceu a alguma outra religião?: <i class="fa fa-"></i><br>
  					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="pt_religiao" id="inlineRadio1" value="Sim"
					 	 <?= ($info['pt_religiao'] == 'Sim') ? 'checked' : '' ?>
					  >
					  <label class="form-check-label" for="inlineRadio1">Sim</label>&nbsp;&nbsp;

					  <input class="form-check-input" type="radio" name="pt_religiao" id="inlineRadio2" value="Não"
					  	 <?= ($info['pt_religiao'] == 'Não') ? 'checked' : '' ?>
					  >
					  <label class="form-check-label" for="inlineRadio2">Não</label>
					</div>
				</div>

				<div class="col-md-6">
					Qual?: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="desc_religiao" value="<?php echo $info['desc_religiao'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Batizado nas Águas em: <i class="fa fa-"></i>
					<input class="form-control" type="date" name="batismo" value="<?php echo $info['batismo'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Igreja de Batismo: <i class="fa fa-"></i>
					<input class="form-control" type="text" name="igreja_batismo" value="<?php echo $info['igreja_batismo'] ?>" required ><br>
				</div>

				<div class="col-md-6">
					Batizado no Espírito Santo?: <i class="fa fa-"></i><br>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="batismo_esp" id="" value="Sim"
					   <?= ($info['batismo_esp'] == 'Sim') ? 'checked' : '' ?>>
					  <label class="form-check-label" for="inlineRadio1">Sim</label>&nbsp;&nbsp;

					  <input class="form-check-input" type="radio" name="batismo_esp" id="" value="Não"
					  <?= ($info['batismo_esp'] == 'Não') ? 'checked' : '' ?>>
					  <label class="form-check-label" for="inlineRadio2">Não</label>
					</div>
				</div>

				<div class="col-md-6">
					Quando?: <i class="fa fa-"></i>
					<input class="form-control" type="date" name="batismo_esp_quando" value="<?php echo $info['batismo_esp_quando'] ?>" required><br>
				</div>

				<div class="col-md-6">
					Arrolado neste igreja por: <i class="fa fa-"></i><br>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="nesta_igreja" id="" value="Profissão de Fé"
					  	<?= ($info['nesta_igreja'] == 'Profissão de Fé') ? 'checked' : '' ?>
					  >
					  <label class="form-check-label" for="inlineRadio1">Profissão de Fé</label>&nbsp;&nbsp;

					  <input class="form-check-input" type="radio" name="nesta_igreja" id="" value="Transferência"
					  	<?= ($info['nesta_igreja'] == 'Transferência') ? 'checked' : '' ?>
					  >
					  <label class="form-check-label" for="inlineRadio2">Transferência</label>&nbsp;&nbsp;
		
					  <input class="form-check-input" type="radio" name="nesta_igreja" id="" value="Jurisdição"
					  	<?= ($info['nesta_igreja'] == 'Jurisdição') ? 'checked' : '' ?>
					  >
					  <label class="form-check-label" for="inlineRadio2">Jurisdição</label>
					</div>
				</div>

				<div class="col-md-6">
					Arrolado em?: <i class="fa fa-"></i>
					<input class="form-control" type="date" name="qd_nesta_igreja" value="<?php echo $info['qd_nesta_igreja'] ?>" required><br>
				</div>

				<div class="col-md-6">
					Situação: <i class="fa fa-"></i>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="situacao" id="" value="Ativo"
					  <?= ($info['situacao'] == 'Ativo') ? 'checked' : '' ?>>
					  <label class="form-check-label" for="inlineRadio1">Ativo</label>&nbsp;
					  <input class="form-check-input" type="radio" name="situacao" id="" value="Inativo"
					  <?= ($info['situacao'] == 'Inativo') ? 'checked' : '' ?>>
					  <label class="form-check-label" for="inlineRadio2">Inativo</label>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group"><br>
					    <label for="exampleFormControlTextarea1">Observações:</label>
					    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3"><?php echo $info['obs'];?></textarea>
					</div>
				</div>

				<div class="col-md-4">
					<button class="btn btn-primary">
						Editar Membro <i class="fa fa-user-plus"></i>
					</button>&nbsp;	

					<a class="btn btn-danger" href="<?php echo BASE_URL ?>membros">
						Voltar
					</a>

				</div>

				</div>
			</div>

		</div>
	</div>

	
</form>

</section>
<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00");
			$("#tel").mask("(00) 00000-0000");
			$("#cep").mask("00000-000");
		});
	</script>
<script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
	</script>