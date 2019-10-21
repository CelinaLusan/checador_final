<?php
class Clientes extends CI_Model { 
   
    public function insert($nombre,$apellido,$direccion,$notas){
        $data = array(
           'nombre' => $nombre,
		   'apellido' => $apellido,
		   'direccion' => $direccion,
		   'notas' => $notas        
        );

        $id = $this->db->insert('clientes', $data);
        return $id;
    }
	
	public function getClientes(){
		$consulta = $this->db->query('select * from clientes');
		
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row)
			$arrayClientes[htmlspecialchars($row->idCliente, ENT_QUOTES)]=
			htmlspecialchars($row->nombre, ENT_QUOTES);
			$consulta->free_result();
			return $arrayClientes;
		}
	}
	
}