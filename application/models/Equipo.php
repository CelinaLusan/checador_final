<?php
class Equipo extends CI_Model { 
   
    public function insert($nombre){
        $data = array(
           'nombre' => $nombre,
           'puntosObtenidos' => ''           
        );

        $id = $this->db->insert('equipos', $data);
        return $id;
    }
}