<?php
class Login extends CI_Model {

	public function __construct(){
		parent::__construct();
		
		//Se cargan los modelos
		$this->load->database();		
	 }
	 
	 public function verificaUsuario($nombreUsuario,$password){
		 
		 echo $nombreUsuario;
		  echo $password;
		 
		 //$query['nombreUsuario']=$nombreUsuario;
		 //$pass=md5($password);
		$query = $this->db->query("SELECT * FROM usuarios WHERE nombreUsuario='".$nombreUsuario."' and password='".$password."'");
		//$query = $this->db->query("SELECT * FROM usuarios WHERE nombreUsuario='k' and password='k'");
		//echo $query;
		//$row=$query->row();
		//echo $row->idUsuario;
		
		// $this->db->from('usuarios');
		// $this->db->where('nombreUsuario='.$nombreUsuario.' and password='.$password);
		 //$query=$this->db->get();
		 //$query=$this->db->get_where('usuarios',array('nombreUsuario' => $nombreUsuario,'password' => $password));
		if($query->num_rows()>0){
			return $query->row();
		}
		return null;
		//
		// return $this->db->get_where('usuarios',$query->row());
		 
	 }
	 
   
    public function insert($nombre,$apellido,$nombreUsuario,$password,$idRol,$idMoto){
        $data = array(
           'nombre' => $nombre,
		   'apellido' => $apellido,
		   'nombreUsuario' => $nombreUsuario,
		   'password' => $password,
		   'idRol' => $idRol,
		   'idMoto' => $idMoto          
        );

        $id = $this->db->insert('usuarios', $data);
        return $id;
    }
	
	public function get_usuario($nombre,$password){
        $data = array(
           'nombre' => $nombre,
		   'apellido' => $apellido,
		   'nombreUsuario' => $nombreUsuario,
		   'password' => $password,
		   'idRol' => $idRol,
		   'idMoto' => $idMoto          
        );

        $id = $this->db->insert('usuarios', $data);
        return $id;
    }
	
}