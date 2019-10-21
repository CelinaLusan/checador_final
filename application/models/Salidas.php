<?php
class Salidas extends CI_Model { 
   
    public function insert($horaSalida,$idCliente,$monto,$idChofer,$observaciones){
        $data = array(
			'horaSalida'=>$horaSalida,
           'clienteDestino' => $idCliente,
		   'monto' => $monto,
		   	'chofer' => $idChofer,
		   'observaciones' => $observaciones,
		'estatus' => 1  
        );

        $id = $this->db->insert('registros', $data);
        return $id;
    }
	
	public function getRegistros(){
		$consulta = $this->db->query('select * from registros where estatus=1');
		
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row)
			$arrayRegistros[htmlspecialchars($row->idRegistro, ENT_QUOTES)]=
			htmlspecialchars($row->horaSalida, ENT_QUOTES);
			$consulta->free_result();
			return $arrayRegistros;
		}
	}
	
	public function updateRegistros($horaLlegada,$estatus,$idRegistro){
	
	$query = $this->db->query("UPDATE registros SET horaLlegada='" .$horaLlegada."', estatus='".$estatus. "' WHERE idRegistro=".$idRegistro);
		//UPDATE `checador`.`registros` SET `horaLlegada` = '0000-00-00 00:00:03' WHERE `registros`.`idRegistro` = 3;
		return $query;
	
	}
	
	
}