<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?= base_url();?>public/css/main.css?<?= date('Y-m-d H:i:s');?>" >
	<title>Checador</title>    
</head>
<body>

	<?php $this->load->view('layout/navbar'); ?>	

	<main role="main" class="container">

		<?php
			if ( isset($mensaje ) ) {				
		?>
		<div class="alert <?=$alert?> alert-dismissible fade show" role="alert">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><?=$title?></strong> <?=$mensaje?>.
		</div>
		<?php
			}
		?>

		<h1>Registrar Motos</h1>
		<div class="col-md-offset-3 col-md-6">
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/Moto/agregarMoto" method="POST" >

			<div class="form-group">
				<div class="form-group">
					<label>Placas</label>
					<input type="text" class="form-control" name="placas" placeholder="Ingresa las placas" required>	
				</div>
				<div class="form-group">
					<label>Marca</label>
					<input type="text"  name="marca" class="form-control" placeholder="Marca" required>
				</div> 
			</div>
			<button type="submit"class="btn btn-primary" >Agregar moto</button>
		</form>

    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>