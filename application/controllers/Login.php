<?php

//session_start();

	class LoginUser extends CI_Controller {
		
		public function __construct()
		 {
		 parent::__construct();
			$this->load->model('Login');
			//$this->load->library('session');
		 
		 }

		public function index()
		{
			$this->load->view('login');
		}

		public function iniciar_sesion(){
			
			$marca = $this->input->post('nombre');
			$placas = $this->input->post('contrasena');
			
			$logueado = $this->Login->verificaUsuario($nombre,$password);
			if($logueado){
				//echo $p="si";
				$usuario_data = array(
	               'id' => $logueado->id_usuario,
	               'nombre' => $logueado->nombre_usuario,
	               'logueado' => TRUE
            	);
            	$this->session->set_userdata($usuario_data);
            	
			    //$p=$this->session->userdata('nombre');
			    //header('Location: ' . "logueado");
      			//die();
      			
			    redirect('index.php/agregarUsuario');
			    echo "true";
			}else{
				//$p="no";
				//$this->load->helper('url');
				//redirect('login');
				//header('Location:');  
				echo "error";
			}

		
		}

		 public function logueado() {
		 	/*
		    if($this->session->userdata('logueado')){
		        $data = array();
		        $data['nombre'] = $this->session->userdata('nombre');
		        $this->load->view('head', $data);
		        $this->load->view('agregar_usuario');
				$this->load->view('foot');
		        
			//	redirect('agregar_usuario');
		    }else{
		         redirect('login/index');
		    }*/
		}

		public function cerrar_sesion(){
			
			/*$usuario_data = array(
				'id' => '',
	            'nombre' => '',
         		'logueado' => FALSE
		    );
		      	$this->session->unset_userdata($usuario_data);*/
		      	$this->session->sess_destroy();
		      	redirect('login');
		}
	}
?>