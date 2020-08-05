<!-- Conteudo da Pagina -->
<section class="content-header">
<h1>
	Dashboard <i class="fa fa-tachometer-alt"></i>
</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

<div class="row">

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Membros</span>
            <span class="info-box-number"><?php echo $quant_membros; ?> Membros</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-chart-line"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Ativos</span>
            <span class="info-box-number"><?php echo $quant_membros_ati; ?> Membros</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

        <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-search-dollar"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Inativos</span>
            <span class="info-box-number">
            	<?php echo $quant_membros_ina; ?> Membros
           </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
        <!-- /.col -->

      
      <!-- /.col -->
    </div><br>


</section>