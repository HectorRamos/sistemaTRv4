<?php 
class Guias_model extends CI_Model{
	public function Insertar_Guia($url_doc, $Imagen, $datos = null){
		if($datos !=null){
			$titulo = $datos['Titulo'];
			$fecha = $datos['Fecha1'];
			$tipo = $datos['tipo'];
			$video = explode('=', $datos['Video']);
			$video = $video[1];
			$Descripcion = $datos['Descripcion'];
			$id=$this->session->userdata('id');

			$documento = $url_doc;
			$contenido = $datos['Contenido'];

			$sql ="INSERT INTO tbl_Guias_Multimedia(FK_Id_Usuaria, Titulo_Guia, Fecha_Publicacion, Tipo_Publicacion, Video_Multimedia, Documento_Guia, Contenido, Descripcion_Guia, Imagen) VALUES($id,'$titulo', '$fecha', '$tipo', '$video', '$documento', '$contenido','$Descripcion', '$Imagen')";		
			if($this->db->query($sql)){
				return true;
			}
			else 
			{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function Ver_Guias($valor){
		if($valor==1){
			$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria  WHERE g.Tipo_Publicacion='Documento'" ;
		}
		else if($valor==2){
			$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria  WHERE g.Tipo_Publicacion='Video'";
		}
		$result = $this->db->query($sql);
		return $result;
	}
	public function Ver_GuiasPor($valor, $buscar){
		
		if($valor==1){
			$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria  WHERE g.Tipo_Publicacion='Documento'  AND g.Titulo_Guia LIKE '%$buscar%'";
		}
		else if($valor==2){
			$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria  WHERE g.Tipo_Publicacion='Video' AND g.Titulo_Guia LIKE '%$buscar%'";
		}
		$result = $this->db->query($sql);
		return $result->result();
	}
	public function VerGuiaId($id){
		$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria WHERE g.pk_Id_Guia='$id'";
		$result = $this->db->query($sql);
		return $result;
	}
	public function gestionarGuias(){

		$sql="SELECT g.*, u.Nombre, u.fk_Tipo_Usuaria FROM tbl_Guias_Multimedia  AS g INNER JOIN tbl_Usuarias AS u ON g.FK_Id_Usuaria = u.pk_Id_Usuaria";

		$result = $this->db->query($sql);
		return $result;
	}
	public function EliminarGuia($id){

		$sql = "DELETE FROM tbl_Guias_Multimedia WHERE pk_Id_Guia =$id";

		if ($this->db->query($sql)) {
			return true;
			# code...
		}
		else{
			return false;
		}

	}
	public function Editar($datos=null, $img, $doc, $video){

		$titulo = $datos['Titulo'];
		$fecha = $datos['Fecha1'];
		$tipo = $datos['Tipo'];
		$contenido = $datos['Contenido'];
		$id = $datos['Id'];

		//$video = explode('=', $datos['Video']);
		//$video = $video[1];
		$Descripcion = $datos['Descripcion'];
		//$id=$this->session->userdata('id');


		$sql ="UPDATE tbl_Guias_Multimedia SET  Titulo_Guia='$titulo', Fecha_Publicacion='$fecha', Video_Multimedia='$video', Documento_Guia='$doc', Contenido='$contenido', Descripcion_Guia='$Descripcion', Imagen='$img' WHERE pk_Id_Guia=$id";
		if($this->db->query($sql)){
			return true;

		}
		else{
			return false;
		}

	}

}


?>