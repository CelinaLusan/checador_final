<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?= base_url();?>public/css/main.css?<?= date('Y-m-d H:i:s');?>" >
	<title>Torneo Futbol</title>    
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

		<h1>Registrar amonestaciones</h1>
		<div class="col-md-offset-3 col-md-6">
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/AgregarAmonestacion/actualizarAmonestacionesJugador" method="POST" >

			<div class="form-group">
				<label>Elige al jugador</label>
				<select class="form-control" name="idJugador" id="idJugador" required>
					<?php
						echo '<option disabled selected>Elije un Jugador</option>';
						foreach($arrayJugadores as $i => $idJugador)
						echo '<option selected set_value="',$i,'">',$idJugador,'</option>';
					?>
				</select>
				
				<div class="form-group">
					<label>Tarjetas Amarillas</label>
					<input type="text" maxlength="3" class="form-control" name="tarjetasAmarillas" id="tarjetasAmarillas" placeholder="Tarjetas amarillas obtenidas">	
				</div>
				<div class="form-group">
						<label>Tarjetas rojas</label>
						<input type="text" maxlength="3" name="tarjetasRojas" id="tarjetasRojas" class="form-control" placeholder="Tarjetas rojas obtenidas">
				</div> 
			</div>
			<button type="submit"class="btn btn-primary" >Agregar amonestaciones</button>
		</form>

    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>