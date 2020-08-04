	<!-- Conteudo da Pagina -->
<section class="content-header">
<h1>
	Membros <i class="fa fa-"></i>
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
		<div class="form-group col-md-4">
			<form action="#" method="get" class="sidebar-form">
        <div class="input-group" >
          <input type="text" name="" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
		</div>
		
		<div class="box-body">
			<table class="table table-hover" border="0" width="100%">
				<thead>
					<tr>
						<th>ID_FICHA</th>
						<th>NOME</th>
						<th>DATA DE NASCIMENTO</th>
						<th>CPF</th>
						<th>TELEFONE</th>
						<th>SITUAÇÃO</th>
						<th>AÇÕES</th>
					</tr>
				</thead>
				<?php foreach ($list as $membro): ?>
					<tr>
						<td><?php echo $membro['id']; ?></td>
						<td><?php echo $membro['nome']; ?></td>
						<td><?php echo $membro['dt_nasc']; ?></td>
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
