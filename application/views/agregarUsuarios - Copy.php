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

		<h1>Registrar usuario</h1>
		<div class="col-md-offset-3 col-md-6">
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/Usuario/agregarUsuario" method="POST" >

			<div class="form-group">
				<label>Elige el rol</label>
				<select class="form-control" name="idRol" id="idRol" required>
					<?php
						echo '<option disabled selected>Elije un rol</option>';
						foreach($arrayRoles as $i => $idRol)
						echo '<option selected value="'.$i.'">'.$idRol.'</option>';
					?>
				</select>
				
				<label>Elige la moto asignada</label>
				<select class="form-control" name="idMoto" id="idMoto" >
					<?php
						echo '<option value="0" selected>Elije una moto</option>';
						foreach($arrayMotos as $i => $idMoto)
						echo '<option value="'.$i.'">'.$idMoto.'</option>';
					?>
				</select>
				
				
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" placeholder="ingresa el nombre" required>	
				</div>
				
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" name="apellido" id="apellido" class="form-control" placeholder="ingresa el apellido">
				</div>

				<div class="form-group">
					<label>Nombre de usuario</label>
					<input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="ingresa el nombre de usuario" required>
				</div>
				</div>
				
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" placeholder="Ingresa una contraseña" required>
				</div>
				
			</div>
			<button type="submit"class="btn btn-primary" >Agregar usuario</button>
		</form>

    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>