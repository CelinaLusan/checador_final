<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	
	public $data;

	public function __construct(){
		parent::__construct();
		//Se cargan los modelos
		$this->load->model('Clientes');	

			if(!$this->session->userdata('logueado')){
			 	redirect('login');
			}else{
				if($this->session->userdata('nombre') != "admin"){
					redirect('Salida');
				}
			}	
	 }

	public function index()
	{
		$this->load->view('agregarClientes');
	}

	public function agregarCliente()
	{	
		//recuperamos la información del formulario
		//echo $_POST['idMoto'];
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$direccion = $this->input->post('direccion');
		$notas = $this->input->post('notas');
		
		//insertamos datos del usuarrio
		$id = $this->Clientes->insert($nombre,$apellido,$direccion,$notas);

		//validación
		$data['alert'] = 'alert-danger';
		$data['title'] = 'Error';
		$data['mensaje'] = 'Ocurrió un error al intentar agregar su usuario';
		
		if ( $id ) {
			$data['alert'] = 'alert-success';
			$data['title'] = 'Bien';
			$data['mensaje'] = 'Se agrego de manera satisfactoria. ';	
		}
		
		$this->load->view('agregarClientes',$data);
		
	}
	

	
}
