<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Peliculas_model extends CI_Model {
        public $id_pelicula;         
        public $titulo; 
        public $titulooriginal;
        public $direccion;
        public $reparto;
        public $id_genero;
        public $argumento;  
        public $trailer;
        public $paisanoestreno;
        public $foto;
        public $duracion;
          
        
       
         public function get_peliculas()  {
             $query = $this->db->get('peliculas');
             return $query->result();
        }
       
         public function get_peliculas_extreno()  {
             $this->db->select('*');            
            $this->db->from('peliculas');
            $this->db->where('estreno', 1 );
             $query = $this->db->get();
             return $query->result();
        }
     
        public function get_titulo()  {
                   
         
            $this->db->select('titulo');            
            $this->db->from('peliculas');
            
            $query = $this->db->get();
             return $query->result();
         }
         public function get_pelicula_titulo($str)  {
                        
            $this->titulo  = $str;
            $this->db->select('*');            
            $this->db->from('peliculas');
            $this->db->where('titulo', $this->titulo );
            $query = $this->db->get();
             return $query->result();
         }
         public function get_pelicula_genero($str)  {
               //function que toma un por tanto de registros dados de param
            $this->id_genero  = $str;             
            $this->db->select('*');            
            $this->db->from('peliculas');
            $this->db->where('id_genero', $this->id_genero );
            $query = $this->db->get();
             return $query->result();
         }
         public function get_pelicula_titulo_gen($genero,$titulo)  {
               //function que toma un por tanto de registros dados de param
           
            $this->id_genero  =$genero ;   
            $this->titulo  = $titulo;        
            $this->db->select('*');            
            $this->db->from('peliculas');
            if($genero!=null && $genero!=0)
            $this->db->where('id_genero', $this->id_genero );
            if($titulo!=null && $genero!="")
            $this->db->where('titulo', $this->titulo );
            $query = $this->db->get();
             return $query->result();
         }
   
         public function get_informacion($id){    
  
         $this->db->select('*');
         $this->db->from('peliculas');
          $this->db->where('peliculas.id_pelicula ='.$id);
         $this->db->join('generos','peliculas.id_genero =generos.id_genero');
         $this->db->join('salas', 'peliculas.id_sala=salas.id_sala');
         $this->db->join('peliculashorario', 'peliculas.id_pelicula=peliculashorario.id_pelicula');
         $this->db->join('horarios', 'peliculashorario.id_horario=horarios.id_horario');
          
         return $this->db->get()->result();
}


        }


?>