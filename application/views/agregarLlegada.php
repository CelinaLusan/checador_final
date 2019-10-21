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

		<div class="col-md-offset-3 col-md-6">
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/Llegada/agregarLlegada" method="POST" >

			<div class="form-group">
					<label>Fecha y hora de llegada</label>
					<input type="datetime" name="horaLlegadaVisible" id="horaSalidaVisible" class="form-control" value="<?php echo $fecha=date("Y-m-d\TH-i");?>" disabled>
					<input type="hidden" name="horaLlegada" id="horaLlegada" class="form-control" value="<?php echo $fecha=date("Y-m-d\TH-i");?>" >
			</div>
			
			<div class="form-group">
				<label>Elige tu registro</label>
				<select class="form-control" name="idRegistro" required>
					<?php
						echo '<option disabled required>Elije tu salida</option>';
						foreach($arrayRegistros as $i => $idRegistro)
						echo '<option selected value="'.$i.'">'.$idRegistro.'</option>';
					?>
				</select>
				
			</div>
			<button type="submit"class="btn btn-primary" >Terminar entrega</button>
		</form>

    </main>

	<script src="<?= base_url();?>public/js/jquery-3-3-1.js"></script>    
    <script src="<?= base_url();?>public/js/popper.min.js"  ></script>
    <script src="<?= base_url();?>public/js/bootstrap.min.js" ></script>
</body>
</html>