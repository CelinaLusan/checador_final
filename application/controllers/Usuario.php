<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public $usuarios_model;
	public $data;

	public function __construct(){
		parent::__construct();
		//Se cargan los modelos
		$this->load->model('Usuarios');
		$this->load->model('Roles');
		$this->load->model('Motos');	
			if(!$this->session->userdata('logueado')){
			 	redirect('login');
			}
			else{
				if($this->session->userdata('nombre') != "admin"){
					redirect('Salida');
				}
			}
	 }

	public function index()
	{
		$datos["arrayRoles"]=$this->Roles->getRoles();
		$datos["arrayMotos"]=$this->Motos->getMotos();
		$this->load->view('agregarUsuarios',$datos);
	}

	public function agregarUsuario()
	{	
		//recuperamos la información del formulario
		//echo $_POST['idMoto'];
		$idRol = $this->input->post('idRol');
		$idMoto = $this->input->post('idMoto');
		$apellido = $this->input->post('apellido');
		$nombre = $this->input->post('nombre');
		$nombreUsuario = $this->input->post('nombreUsuario');
		$password = $this->input->post('password');
		
		//insertamos datos del usuarrio
		$id = $this->Usuarios->insert($nombre,$apellido,$nombreUsuario,$password,$idRol,$idMoto);

		//validación
		$data['alert'] = 'alert-danger';
		$data['title'] = 'Error';
		$data['mensaje'] = 'Ocurrió un error al intentar agregar su usuario';
		
		if ( $id ) {
			$data['alert'] = 'alert-success';
			$data['title'] = 'Bien';
			$data['mensaje'] = 'Se agrego de manera satisfactoria. ';	
			$data["arrayRoles"]=$this->Roles->getRoles();
			$data["arrayMotos"]=$this->Motos->getMotos();
		}
		
		$this->load->view('agregarUsuarios',$data);
		
	}
	

	
}
