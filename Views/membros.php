<?php


require_once('connection.php');
define("ROW_PER_PAGE",10);
// Paginação

	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = 'SELECT * FROM ficha_membros WHERE nome LIKE :keyword';// OR email LIKE :keyword OR data_nasc LIKE :keyword OR cpf LIKE :keyword ORDER BY id DESC ';
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
if($sgbd=='mysql'){
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
}else{
	$limit=" offset " . $start . " limit " . ROW_PER_PAGE;
}
	$pagination_statement = $pdo->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $pdo->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>	

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

<div class="container">

<div class="row">
    
    <div class="col-md-4" style='text-align:left;'>
<div class="form-group">
        <form name='frmSearch' action='' method='post'>
        <input class="form-control" type='text' name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' maxlength='25' placeholder="Procure pelo nome">
        
    </div>
</div>

<table class='tbl-qa table table-hover'>
  <thead>
	<tr>
<?php
	$sql = 'SELECT id, nome, dt_nasc, cpf, tel, situacao FROM ficha_membros';
        $sth = $pdo->query($sql);
        $numfields = $sth->columnCount();
        
        #for($x=0;$x<$numfields;$x++){
          #  $meta = $sth->getColumnMeta($x);
            #$field = $meta['name'];
?>
	  
						<th scope="col">ID_FICHA</th>
						<th scope="col">NOME</th>
						<th scope="col">DATA DE NASCIMENTO</th>
						<th scope="col">CPF</th>
						<th scope="col">TELEFONE</th>
						<th scope="col">SITUAÇÃO</th>
						<th scope="col">AÇÕES</th>
					
	<?php
        #}
print  "</thead>
  <tbody id='table-body'>
	  <tr class='table-row'>";

	if(!empty($result)) { 

		foreach($result as $row) {

            #for($x=0;$x<$numfields;$x++){
               # $meta = $sth->getColumnMeta($x);
                #$field = $meta['name'];

?>
            
            <td scope="row"><?php echo $row['id']; ?></td>
			<td><?php echo $row['nome']; ?></td>
			<td><?php echo date("d/m/Y", strtotime($row['dt_nasc'])); ?></td>
			<td><?php echo $row['cpf']; ?></td>
			<td><?php echo $row['tel']; ?></td>
			<td><?php echo $row['situacao']; ?></td>
			<td>
				<div class="btn-group">

					<a href="<?php echo BASE_URL.'membros/edit/'.$row['id']?>" class="btn btn-primary">
									 Editar
					</a>
					<a href="<?php echo BASE_URL.'membros/delete/'.$row['id']?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir')">
									Excluir
					</a>

					</div>
					</td>

            

    <?php
            #}
?>
            </tr>
<?php
		}
	}
	?>
  </tbody>
</table>
<?php echo $per_page_html; ?>
 </div>
</form>
</div>
</div>
</section>
