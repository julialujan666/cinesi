<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Genero_model extends CI_Model {
        public $id_genero;         
        public $genero; 
 
   public function get_genero()  {
             $query = $this->db->get('generos');
             return $query->result();
        }
         
    }
    ?>