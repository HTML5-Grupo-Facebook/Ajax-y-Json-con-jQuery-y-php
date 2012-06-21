<?php 
//include_once("bd.php"); llamamos al archivo bd.php que tiene nuestra coneccion a las base de datos

$id = $_POST['id'];
$identi = $_POST['identi'];

//$link = conectarse(); //la variable link contiene nuestra coneccion !! en este caso la comentamos jeje

switch($identi){
	/*
		La estructura del Switch es solo por si queremos ocupar el mismo archivo para recoger otros datos, 
		ocupamos la variable "identi" que nos envía jquery para saber que datos queremos obtener.
	*/
	case 'usuario':
	
		/*
		$sql = "SELECT * FROM usuarios Where id ='".$id."'";
		$rsUsu = mysql_query( $sql,$link);		
		$row = mysql_fetch_array($rsUsu);
		
		//recivimos los datos y los codificamos a utf-8 para no tener problemas de caracteres.
		$data['id']			= utf8_encode($row['usu_id']);
		$data['nombre']		= utf8_encode($row['usu_nombre']); 
		$data['apellido']	= utf8_encode($row['usu_apellido']);
		$data['mail']		= utf8_encode($row['usu_nick']);
		$data['twitter']	= utf8_encode($row['usu_mail']);*/
		
		$data['id']			= "88";
		$data['nombre']		= "Sebastián"; 
		$data['apellido']	= "Silva";
		$data['mail']		= "sebasilvac88@gmail.com";
		$data['twitter']	= "@seba_silva_c";
		$data['facebook']	= "";
		
	break;
	
	case 'producto':
		
		/*
		$sql = "SELECT * FROM producto Where id ='".$id."'";
		$rsPro = mysql_query( $sql,$link);		
		$row = mysql_fetch_array($rsPro);
			
		$data['id']				= utf8_encode($row['id']);
		$data['nombre']			= utf8_encode($row['nombre']); 
		$data['descripcion']	= utf8_encode($row['descripcion']); 
		$data['stock']			= utf8_encode($row['stock']);
		*/
		
		$data['id']				= "30";
		$data['nombre']			= "Crema Arrugas"; 
		$data['descripcion']	= "papel de lija para las desperfecciones de la cara"; 
		$data['stock']			= "23";
		
		
	break;
}

//codificamos el array como JSON
echo json_encode($data);

?>