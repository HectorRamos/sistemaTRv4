<?php
class Contactos_Model extends CI_Model
{
	public function guardarContacto($idContacto, $nombreContacto, $FotoContacto){
		$idUsuaria =$this->session->userdata('id');
			if($this->db->query("INSERT INTO tbl_Contactos(FK_Id_Usuaria, Id_User_contacto, Nombre_Contacto, Foto_Contacto, Estado_Contacto) VALUES ('$idUsuaria', '$idContacto', '$nombreContacto', '$FotoContacto',0)"))
			{
				return true;
			}
			else{
				return false;
			}
	}
	public function VerificarContacto($idUser){
		$id= $this->session->userdata('id');
		$sql = "SELECT * FROM tbl_Contactos WHERE FK_Id_Usuaria=$id AND Id_User_contacto=$idUser";
		$res = $this->db->query($sql);
		return $res;
	}
	public function VerificarContactoP(){
		$id= $this->session->userdata('id');
		$sql = "SELECT * FROM tbl_Contactos WHERE  Id_User_contacto=$id";
		$res = $this->db->query($sql);
		return $res;
	}
	public function ListaContacto(){
		$id= $this->session->userdata('id');
		$sql = "SELECT * FROM tbl_Contactos WHERE FK_Id_Usuaria=$id";
		$res = $this->db->query($sql);
		return $res;
	}
	public function ListaContactosA(){
		$id= $this->session->userdata('id');
		$sql = "SELECT c.FK_Id_Usuaria, c.PK_Id_Contacto, u.Nombre, p.Foto_Perfil FROM tbl_Contactos AS c INNER JOIN tbl_Usuarias AS u ON c.FK_Id_Usuaria=u.pk_Id_Usuaria INNER JOIN tbl_Perfiles_Empresariales AS p ON p.FK_Usuaria=u.pk_Id_Usuaria WHERE Id_user_contacto=$id";
		$res = $this->db->query($sql);
		return $res;
	}

}
?>