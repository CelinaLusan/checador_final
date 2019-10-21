<?php
class Usuarios extends CI_Model { 
   
    public function insert($nombre,$apellido,$nombreUsuario,$password,$idRol,$idMoto){
		$pass=md5($password);
        $data = array(
           'nombre' => $nombre,
		   'apellido' => $apellido,
		   'nombreUsuario' => $nombreUsuario,
		   'password' => $pass,
		   'idRol' => $idRol,
		   'idMoto' => $idMoto          
        );

        $id = $this->db->insert('usuarios', $data);
        return $id;
    }
	
	public function get_usuario(){
		
		$consulta = $this->db->query('select * from usuarios');
		
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row)
			$arrayUsuarios[htmlspecialchars($row->idUsuario, ENT_QUOTES)]=
			htmlspecialchars($row->nombre, ENT_QUOTES);
			$consulta->free_result();
			return $arrayUsuarios;
		}
        
    }
	
}