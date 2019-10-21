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

		<h1>Registrar salida entrega</h1>
				<div>
					
					<a id="horaSalida"></a>
					<?php// echo $fecha=substr(date('c'),0,19) ?> 
				</div>
				
		<div class="col-md-offset-3 col-md-6">
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/Salida/agregarSalida" method="POST" >

			<div class="form-group">
					<label>Fecha y hora de salida</label>
					<input type="datetime" name="horaSalidaVisible" id="horaSalidaVisible" class="form-control" value="<?php echo $fecha=date("Y-m-d\TH-i");?>" disabled>
					<input type="hidden" name="horaSalida" id="horaSalida" class="form-control" value="<?php echo $fecha=date("Y-m-d\TH-i");?>" >
			</div>
			
			<div class="form-group">
				<label>Elige el chofer</label>
				<select class="form-control" name="idChofer" required>
					<?php
						echo '<option disabled selected>Elije un chofer</option>';
						foreach($arrayUsuarios as $i => $idUsuario)
						echo '<option selected value="'.$i.'">'.$idUsuario.'</option>';
					?>
				</select>
				
				<label>Elige la moto</label>
				<select class="form-control" name="idMoto" required>
					<?php
						echo '<option disabled selected>Elije la moto asignada</option>';
						foreach($arrayMotos as $i => $idMoto)
						echo '<option selected value="'.$i.'">'.$idMoto.'</option>';
					?>
				</select>
				
				<label>Elige el cliente</label>
				<select class="form-control" name="idCliente" >
					<?php
						echo '<option disabled>Elije un cliente</option>';
						foreach($arrayClientes as $i => $idCliente)
						echo '<option selected value="'.$i.'">'.$idCliente.'</option>';
					?>
				</select>
				
				<div class="form-group">
					<label>Monto</label>
					<input type="number" step=any class="form-control" name="monto" placeholder="ingresa el monto" required>	
				</div>
				
				<div class="form-group">
					<label>Observaciones</label>
					<input type="text" name="observaciones" class="form-control" placeholder="ingresa las observaciones">
				</div>

				
				
			</div>
				
			</div>
			<button type="submit"class="btn btn-primary" >Agregar registro</button>
		</form>

    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
	<script type="text/javascript" >
		var fecha=new Date();
		
	</script>
</body>
</html>