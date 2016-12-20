<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mi_modelo extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    
    public function obtener(){
        $query=$this->db->get("peliculas");
        return $query->result();

    }

    public function eliminar($id){
        $data = array(
      'id' => $id
    );

    $this->db->delete('peliculas', $data);
    }


    public function obtenerporid($id){
       $this->db->where('id', $id);
        $query = $this->db->get('peliculas', 1);
        return $query->result();
    }


    public function editar($id,$nombre,$sinopsis,$genero){
        $data=array(
            'Nombre'=>$nombre,
            'Genero'=>$genero,
            'Sinopsis'=>$sinopsis
            );
    $this->db->where('id', $id);
    return $this->db->update('peliculas',$data);
    }

    public function arrendar($id,$cantidad){
        $cantidad = $cantidad - 1;
        $data=array(
            'cantidad'=>$cantidad
            );
        $this->db->where('id',$id);
        return $this->db->update('peliculas', $data);
    }

    public function devolver($id,$cantidad){
        $cantidad = $cantidad + 1;
        $data=array(
            'cantidad'=>$cantidad
            );
        $this->db->where('id',$id);
        return $this->db->update('peliculas', $data);



    }
}