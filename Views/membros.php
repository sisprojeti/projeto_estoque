	<!-- Conteudo da Pagina -->
<section class="content-header">
<h1>
	Membros <i class="fa fa-"></i>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo BASE_URL ?>views/imprimir.php" class="btn btn-info" onclick="return confirm('Gerar Relatório Excel dos membros.')">
					Relatório de Membros
				</a>
</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

	<div class="box">
		<div class="box-header">
			<div class="box-tilte">
			 Membros - Listagem	
			</div>
			<div class="box-tools">
				
				<a href="<?php echo BASE_URL ?>membros/add" class="btn btn-success">
					Adicionar
				</a>
			</div>
		</div>

		
			<form action="#" method="get" class="sidebar-form" style="border: 0 solid #000; " >
		        <div class="input-group col-md-4" >
		          <input type="text" name="" class="form-control" placeholder="Procurar membro..." border="0">
		          <span class="input-group-btn">
		                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		                </button>
		              </span>
		        </div>
		        
		    </form>
		
		<div class="box-body table-responsive">
			<table class="table table-bordered" border="0" width="100%">
				<thead>
					<tr>
						<th scope="col">ID_FICHA</th>
						<th scope="col">NOME</th>
						<th scope="col">DATA DE NASCIMENTO</th>
						<th scope="col">CPF</th>
						<th scope="col">TELEFONE</th>
						<th scope="col">SITUAÇÃO</th>
						<th scope="col">AÇÕES</th>
					</tr>
				</thead>
				<?php foreach ($list as $membro): ?>
					<tr>
						<td scope="row"><?php echo $membro['id']; ?></td>
						<td><?php echo $membro['nome']; ?></td>
						<td><?php echo date("d/m/Y", strtotime($membro['dt_nasc'])); ?></td>
						<td><?php echo $membro['cpf']; ?></td>
						<td><?php echo $membro['tel']; ?></td>
						<td><?php echo $membro['situacao']; ?></td>
						<td>
							<div class="btn-group">

								<a href="<?php echo BASE_URL.'membros/edit/'.$membro['id']?>" class="btn btn-primary">
									 Editar
								</a>
								<a href="<?php echo BASE_URL.'membros/delete/'.$membro['id']?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir')">
									Excluir
								</a>

							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
	</div>

</section>
