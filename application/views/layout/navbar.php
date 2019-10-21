<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">      
	<img class="navbar-brand" src="<?= base_url();?>public/image/logo.jpeg" alt="" width="50px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/Salida">Salida<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/Usuario">Usuarios<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/Cliente">Clientes<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/Moto">Motos<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/Llegada">Registrar Llegadas<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>index.php/LoginUsers/cerrar_sesion">Salir<span class="sr-only">(current)</span></a>
			</li>
        </ul>        
    </div>
</nav>