<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgregarUsuario extends CI_Controller {
	
	public $jugadores_model;
	public $data;

	public function __construct(){
		parent::__construct();
		//Se cargan los modelos
		$this->load->model('Amonestaciones');	
	 }

	public function index()
	{
		$datos["arrayJugadores"]=$this->Amonestaciones->getJugadores();
		$this->load->view('agregarAmonestacion',$datos);
	}

	public function actualizarAmonestacionesJugador()
	{	
		//recuperamos la información del formulario
		$idJugador = $this->input->post('idJugador');
		$tarjetasAmarillas = $this->input->post('tarjetasAmarillas');
		$tarjetasRojas = $this->input->post('tarjetasRojas');
		
		//insertamos el nombre del nuevo equipo
		$id = $this->Amonestaciones->updateJugador($idJugador,$tarjetasAmarillas,$tarjetasRojas);

		//validación
		$data['alert'] = 'alert-danger';
		$data['title'] = 'Error';
		$data['mensaje'] = 'Ocurrió un error al intentar agregar su amonestacion, por favor contacte al departamente de Desarrollo. ';
		
		if ( $id ) {
			$data['alert'] = 'alert-success';
			$data['title'] = 'Bien';
			$data['mensaje'] = 'Sus amonestaciones se agregaron de manera satisfactoria. ';	
			$data["arrayJugadores"]=$this->Amonestaciones->getJugadores();
		}
		
		$this->load->view('agregarAmonestacion',$data);
		
	}
	

	
}
