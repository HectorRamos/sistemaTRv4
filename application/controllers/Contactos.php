<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {
	public function index(){
		$this->load->model('Contactos_Model');
		$Contact = $this->Contactos_Model->ListaContacto();
		$ContactA = $this->Contactos_Model->ListaContactosA();
		$data = array('conta'=>$Contact, 'contaA'=>$ContactA);
		$this->load->view('administrador/base/header');
		$this->load->view('Mensajes/Mensajes_Contactos', $data);
		$this->load->view('administrador/base/footer');

	}
	public function Guardar_Contacto(){
				$datos=$this->input->post();
				//echo json_encode($datos);
				$idContacto=$datos['Id'];
				$NombreContacto =$datos['Nombre'];
				$FotoContacto = $datos['Foto'];
				$this->load->model('Contactos_Model');
				$bool=$this->Contactos_Model->guardarContacto($idContacto, $NombreContacto, $FotoContacto);
	}
}
?>