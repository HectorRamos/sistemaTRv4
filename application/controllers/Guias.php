<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guias extends CI_Controller {

	public function index(){
			$this->load->view('administrador/base/header');
			//$this->load->view('administrador/base/home');
			$this->load->view('Guias/Insertar_Guia');
			$this->load->view('administrador/base/footer');
	}
	public function guardar_multimedia(){
		$datos = $this->input->POST();
		$nombre_documento = $_FILES['Documento']['name'];
		$temp = $_FILES['Documento']['tmp_name'];
		$dir="plantilla/Documentos/";
	    move_uploaded_file($temp, $dir.$nombre_documento);
	    $nombre_Imagen = $_FILES['imagenN']['name'];
		$temp = $_FILES['imagenN']['tmp_name'];
		$dir="plantilla/Documentos/";
	    move_uploaded_file($temp, $dir.$nombre_Imagen);
	    $this->load->model('Guias_Model');
	    $bool = $this->Guias_Model->Insertar_Guia($nombre_documento,$nombre_Imagen, $datos);
	     if($bool){
	    	echo '<script type="text/javascript">
				 alert("Operacion realizada con exito !!");
				self.location ="'.base_url().'Guias"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos");
	    	self.location ="'.base_url().'Guias"</script>';
	    }
	}
	public function BuscarGuiaspor(){
		//$this->load->view('administrador/base/header');
		if ($this->input->is_ajax_request()) {
			$this->load->model('Guias_Model');
			$valor = $this->input->POST("buscar");
			$var = $this->input->POST("v");
			$result = $this->Guias_Model->Ver_GuiasPor($var, $valor);
			echo json_encode($result);
		}

	}
	public function Cargar_Guias(){
		$this->load->view('administrador/base/header');
		$var = $this->input->GET('v');
		$this->load->model('Guias_Model');
		$info = $this->Guias_Model->Ver_Guias($var);
		$data = array('Guias_list' => $info);
		//$this->load->view('Guias/Lista_Guias', $data);
		if ($var ==1){
			$this->load->view('Guias/Ver_Guia_Documento', $data);
		}
		else if($var ==2){
			$this->load->view('Guias/Ver_Guia_Video', $data);
		}
		$this->load->view('administrador/base/footer');
	}
	public function VerGuia(){
		$this->load->view('administrador/base/header');
		$id = $this->input->Get('id');
		$this->load->model('Guias_Model');

		$resul= $this->Guias_Model->VerGuiaId($id);
		$data = array('Guia' => $resul);
		$this->load->view('Guias/Guia_u', $data);
		$this->load->view('administrador/base/footer');
	}
	public function Gestionar(){

		$this->load->view('administrador/base/header');
		$this->load->model('Guias_Model');
		$resul= $this->Guias_Model->gestionarGuias();
		$data = array('Guia' => $resul);
		$this->load->view('Guias/Gestionar_Guia', $data);
		$this->load->view('administrador/base/footer');

	}
	public function eliminarGuia(){
		$id =$this->input->GET('id');

		$this->load->model('Guias_Model');
		$bool=$this->Guias_Model->EliminarGuia($id);
		if($bool){
			echo '<script type="text/javascript">	
					self.location ="'.base_url().'/Guias/Gestionar"
				</script>';
		}
		else{
				echo '<script type="text/javascript">
					alert("ERROR");
					self.location ="'.base_url().'Guias/Gestionar"
					</script>';
			}
	}
	public function editarGuia(){
		$id =$this->input->GET('id');

		$this->load->view('administrador/base/header');
		$this->load->model('Guias_Model');
		$resul= $this->Guias_Model->VerGuiaId($id);
		$data = array('Guia' => $resul);
		$this->load->view('Guias/Editar_Guias', $data);
		$this->load->view('administrador/base/footer');

	}
	public function Editar(){
		$datos =$this->input->POST();
		$nombre_documento="";
		$video="";
		if($datos['Tipo']=='Video'){
			if($datos['Video']==""){
				$video = $datos['VideoC'];
			}
			else{
				//$video = $datos['Video'];
				$video = explode('=', $datos['Video']);
				$video = $video[1];
			}

		}
		else if($datos['Tipo']=='Documento'){
			if($_FILES['Documento']['name']==""){

				$nombre_documento=$datos['DocumentoC'];
			}
			else{
				$nombre_documento = $_FILES['Documento']['name'];
				$temp = $_FILES['Documento']['tmp_name'];
				$dir="plantilla/Documentos/";
	    		move_uploaded_file($temp, $dir.$nombre_documento);

			}
		}
		if($_FILES['imagenN']['name']==""){
			$nombre_Imagen=$datos['ImagenC'];
		}
		else{
			$nombre_Imagen = $_FILES['imagenN']['name'];
			$temp = $_FILES['imagenN']['tmp_name'];
			$dir="plantilla/Documentos/";
	    	move_uploaded_file($temp, $dir.$nombre_Imagen);
		}

		$this->load->model('Guias_Model');

		$bool=$this->Guias_Model->Editar($datos, $nombre_Imagen, $nombre_documento, $video);

		if($bool){
			echo '<script type="text/javascript">	
					self.location ="'.base_url().'/Guias/Gestionar"
				</script>';
		}
		else{
				echo '<script type="text/javascript">
					alert("ERROR");
					self.location ="'.base_url().'Guias/Gestionar"
					</script>';
			}


		
	    

	}
}