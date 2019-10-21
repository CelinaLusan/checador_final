<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moto extends CI_Controller {
	
	public $motos_model;
	public $data;

	public function __construct(){
		parent::__construct();
		
			if(!$this->session->userdata('logueado')){
			 	redirect('login');
			}else{
				if($this->session->userdata('nombre') != "admin"){
					redirect('Salida');
				}
			}
		//Se cargan los modelos
		$this->load->model('Motos');		
	 }

	public function index()
	{
	
		$this->load->view('agregarMotos');
	}

	public function agregarMoto()
	{	
		//recuperamos la información del formulario
		//echo $_POST['idMoto'];
		$marca = $this->input->post('marca');
		$placas = $this->input->post('placas');
		
		//insertamos datos del usuarrio
		$id = $this->Motos->insert($marca,$placas);

		//validación
		$data['alert'] = 'alert-danger';
		$data['title'] = 'Error';
		$data['mensaje'] = 'Ocurrió un error al intentar agregar su usuario';
		
		if ( $id ) {
			$data['alert'] = 'alert-success';
			$data['title'] = 'Bien';
			$data['mensaje'] = 'Se agrego de manera satisfactoria';	
		}
		
		$this->load->view('agregarMotos',$data);
		
	}
	

	
}
