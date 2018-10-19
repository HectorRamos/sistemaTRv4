<?php
class Rubros_Model extends CI_Model
{
	public function verRubros(){
		$sql="SELECT * FROM tbl_Rubros";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function insertarRubros($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Rubro'];
			$sql="INSERT INTO tbl_Rubros(Nombre_Rubro) VALUES('$nombre')";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}
	public function editarRubros($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Rubro2'];
			$id= $datos['ID'];
			$sql="UPDATE tbl_Rubros SET Nombre_Rubro ='$nombre' WHERE  PK_Id_Rubro = $id";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}

	public function eliminarRubros($id){

			$sql="DELETE FROM tbl_Rubros WHERE  PK_Id_Rubro = $id";
			if($this->db->query($sql))
			{
			return true;
		}
		else{
			return false;
		}
	}
	public function verificarNombreRubro($nombre){
		$sql = "SELECT Nombre_Rubro FROM tbl_Rubros WHERE Nombre_Rubro = '$nombre'";
		$res =$this->db->query($sql);
		return $res->result();

	}

}