<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cine_controller extends CI_Controller {
 public $genero;
 public $titulo;
 public $title;
 public $id_pelicula;
	
	public function index()
	{
	$this->load->helper('url');
	$this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');
    $this->load->view('header');
    $this->load->model('genero_model','',TRUE);
    $data1['query'] = $this->genero_model->get_genero();
    $this->load->view('buscar',$data1);
    $this->load->view('menu');
    
   // $this->load->view('menu'); 
   
    $this->load->model('peliculas_model','',TRUE);
    $data['query'] = $this->peliculas_model->get_peliculas_extreno();
    $this->load->view('iniciojulia'); 
    $datos['title'] = "EXTRENOS PROXIMOS";
    $this->load->view('titulo',$datos);
    $this->load->view('cuerpo',$data);
   // $this->load->view('cuerpo',$data); 

   // $this->load->view('inicioinicial',$data);
    $this->load->view('pie');
    
	}

   public function cartelera(){
   	 
   	 $this->load->helper('url');
	$this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');
    $this->load->view('header');
    $this->load->model('genero_model','',TRUE);
    $data1['query'] = $this->genero_model->get_genero();
    $this->load->view('buscar',$data1);
    $this->load->view('menu');
    
   // $this->load->view('menu'); 
   
    $this->load->model('peliculas_model','',TRUE);
    $data['query'] = $this->peliculas_model->get_peliculas();
    $datos['title'] = "CARTELERA";
    $this->load->view('titulo',$datos);
    
    $this->load->view('cuerpo',$data);
   // $this->load->view('cuerpo',$data); 

   // $this->load->view('inicioinicial',$data);
    $this->load->view('pie');

   }
   public function buscar()  {
        	    $this->load->helper('form');
        	    $this->load->model('peliculas_model','',TRUE);
               $this->load->helper(array('form', 'url'));
               $this->genero = $this->input->post('genero');
                $this->titulo = $this->input->post('titulo');
                   
               $this->load->library('form_validation');              
               $this->form_validation->set_rules('titulo', 'titulo', 'trim|min_length[4]|max_length[40]|alpha_numeric_spaces');
               $this->form_validation->set_message('max_length[40]','El campo %s debe tener max 40 cracteres');
               $this->form_validation->set_message('min_length[4]','El campo %s debe tener mas de 4 caracteres');
            
              $this->form_validation->set_message('alpha_numeric_spaces','El campo %s debe estar compuesto solo por letras y spacios');
             
                if ($this->form_validation->run() == FALSE)
                {
                  $this->index();
                }
                else{
               
                $this->load->helper('url');
                $this->load->view('header');
                $this->load->model('genero_model','',TRUE);
                $data1['query'] = $this->genero_model->get_genero();
                $this->load->view('buscar',$data1);
                $this->load->view('menu');
                $datos['title'] = "ENCONTRADOS";
                $this->load->view('titulo',$datos);
                $datatitgen['query'] = $this->peliculas_model->get_pelicula_titulo_gen($this->genero,$this->titulo);  

                $this->load->view('cuerpo',$datatitgen);  
                $this->load->view('pie');         
               }}
           
public function informacion($str){
     if($str!=0){
     $this->id_pelicula=$str;
     $this->load->helper('url');
	 $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');
    $this->load->view('header');
    $this->load->model('genero_model','',TRUE);
    $data1['query'] = $this->genero_model->get_genero();
    $this->load->view('buscar',$data1);
    $this->load->view('menu');
    $datos['title'] = "INFORMACIÓN Y VENTAS";
    $this->load->view('titulo',$datos);
   // $this->load->view('menu'); 
   
    $this->load->model('peliculas_model','',TRUE);
    $data3['query'] = $this->peliculas_model->get_informacion($this->id_pelicula);
    $this->load->view('informacion', $data3); 
    $this->load->view('pie'); 
}}
}



?>

