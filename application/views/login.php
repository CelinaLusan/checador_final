<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?= base_url();?>public/css/main.css?<?= date('Y-m-d H:i:s');?>" >
	<title>Checador</title>    
</head>
<body>	

	<main role="main" class="container col-md-6">

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

		
		<div class="col-md-offset-3">
		<h1 class="text-center">Bienvenido</h1>
		<p class="text-center"><img class="img-responsive" src="<?= base_url();?>public/image/user.png" alt="" width="150px"></p>
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/LoginUsers/iniciar_sesion" method="POST" >

			<div class="form-group">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" required>	
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password"  name="password" class="form-control" placeholder="Tu contraseña" required>
				</div> 
			</div>
			<div class="text-center">
				<button  type="submit"class="btn btn-primary" >Login</button>
			</div>
			<p></p>
		</div>
		</form>

    </main>
	

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>