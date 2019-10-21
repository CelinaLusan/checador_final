<?php

//session_start();

	class LoginUser extends CI_Controller {
		
	public $login_model;
	//public $data;
		
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
			
			$nombre = $this->input->post('nombre');
			$password = $this->input->post('password');
			
			$logueado = $this->Login->verificaUsuario($nombre,$password);
			
			//echo $logueado->idUsuario;
			
			if($logueado){
				//$p="si";
				echo "aqui si";
				$usuario_data = array(
	               'id' => $logueado->idUsuario,
	               'nombre' => $logueado->nombreUsuario,
	               'logueado' => TRUE
            	);
            	$this->session->set_userdata($usuario_data);
            	
			    //$p=$this->session->userdata('nombre');
			    //header('Location: ' . "logueado");
      			//die();
      			
			    //redirect('login/logueado');
			    echo "true";
			}else{
				//$p="no";
				//$this->load->helper('url');
				//redirect('login');
				//header('Location:');  
				echo "error no es correcto";
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