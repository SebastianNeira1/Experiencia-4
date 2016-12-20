<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		

		public function __construct() {
		parent::__construct();
		$this->load->model('Mi_modelo');
		$this->load->helper('url');
	}

	public function index()
	{

		
		$peliculas = $this->Mi_modelo->obtener();
		$data['peliculas']= $peliculas;
		$this->load->view('header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('footer',$data);
		
	}


	public function eliminar($id){
		$this->Mi_modelo->eliminar($id);
		redirect('');
	}


	public function editarindex($id){
		$editable = $this->Mi_modelo->obtenerporid($id);
		$data['editable']=$editable[0];
		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('editar',$data);
		$this->load->view('footer',$data);

	}

	public function editar(){
		$id=$this->input->post('id');
		$nombre=$this->input->post('Nombre');
		$sinopsis=$this->input->post('Sinopsis');
		$genero=$this->input->post('Genero');
		$this->Mi_modelo->editar($id,$nombre,$sinopsis,$genero);
		redirect('');
	}

	public function arrendar($id){
		$cantidad=$this->Mi_modelo->obtenerporid($id)[0]->cantidad;
		$this->Mi_modelo->arrendar($id,$cantidad);
		redirect('');



	}


	public function devolver($id){
		$cantidad=$this->Mi_modelo->obtenerporid($id)[0]->cantidad;
		$this->Mi_modelo->devolver($id,$cantidad);
		redirect('');


	}
}
