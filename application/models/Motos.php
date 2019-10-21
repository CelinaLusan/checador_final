<?php
class Motos extends CI_Model { 
   
    public function insert($marca,$placas){
        $data = array(
           'marca' => $marca,
		   'placas' => $placas       
        );

        $id = $this->db->insert('motos', $data);
        return $id;
    }
	
		public function getMotos(){
		$consulta = $this->db->query('select * from motos');
		
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row)
			$arrayMotos[htmlspecialchars($row->idMoto, ENT_QUOTES)]=
			htmlspecialchars($row->marca, ENT_QUOTES);
			$consulta->free_result();
			return $arrayMotos;
		}
		
	}
	
}