<?php
require_once "Conexion.php";
class DatosAdminInventario extends Conexion
{





	#-------- CONSULTAR INVENTARIO


	public static function consultarInventarioModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
	inner join element_iventario on inventario.nom_item=element_iventario.id_element 
	LEFT JOIN usuarios ON inventario.user_item=usuarios.usuario  order by inventario.id_iven desc
	
	");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}





	public static function consultarInventarioAccModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
	
	INNER JOIN element_iventario on inventario_accesorios.acces_elmenId_iven=element_iventario.id_element where inventario_accesorios.acces_esta_iven=1
	");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}











	public static function consulItemElemnModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where tip_element='ITEM' ");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}


	public static function consulaccesoElemnModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where tip_element='ACCES' ");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}






	#REGISTRO  DE INVENTARIO
#-------------------------------------

	public static function ingresarItemIventarioModelo($datosModelo, $tabla)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 

		(nom_item,marca_item, modelo_item, serial_item, placaIdemia_item, estado_item,obser_item,user_item ,fechIngreso) VALUES 
		(:nomItem,:marcaItem,:modeloItem,:serialItem,:placaIdemiaItem,:estadoItem,:obsItem,null,current_timestamp())");



		$stmt->bindParam(":nomItem", $datosModelo["nomItem"], PDO::PARAM_INT);
		$stmt->bindParam(":marcaItem", $datosModelo["marcaItem"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloItem", $datosModelo["modeloItem"], PDO::PARAM_STR);
		$stmt->bindParam(":serialItem", $datosModelo["serialItem"], PDO::PARAM_STR);
		$stmt->bindParam(":placaIdemiaItem", $datosModelo["placaIdemiaItem"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoItem", $datosModelo["estadoItem"], PDO::PARAM_STR);
		$stmt->bindParam(":obsItem", $datosModelo["obsItem"], PDO::PARAM_STR);







		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();





	}





	#-------------------------------------

	public static function ingresarElementosInventarioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla 


	(nom_element,tip_element,estado_element) VALUES 
		
		(:itemRegistar,:tipoitemRegistar,1)");




		$stmt->bindParam(":itemRegistar", $datosModelo["itemRegistar"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoitemRegistar", $datosModelo["tipoitemRegistar"], PDO::PARAM_STR);


		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}




	public static function consEditarItemIventaModelo($idItemIven, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla inner join element_iventario ON inventario.nom_item = element_iventario.id_element where inventario.id_iven=:idItemIven");

		$stmt->bindParam(":idItemIven", $idItemIven, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();

	}

	


	public static function consEditelementIventarioModelo($idElementIven, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where  	id_element=:idElementIven");

		$stmt->bindParam(":idElementIven", $idElementIven, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();

	}



	public static function consDetallIventarioModelo($idElementIven, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
	inner join element_iventario on inventario.nom_item=element_iventario.id_element 
	LEFT JOIN usuarios ON inventario.user_item=usuarios.usuario 
	where inventario.id_iven=$idElementIven
	
	
	");

		$stmt->bindParam(":idElementIven", $idElementIven, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();

	}






	#ACTUALIZACIO´N  DE INVENTARIO
#-------------------------------------

	public static function actualizarUserItemiventarioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla  SET
	
	user_item=:usuario

	
	 WHERE id_iven=:idTime");


		$stmt->bindParam(":idTime", $datosModelo["idTime"], PDO::PARAM_INT);
		$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);


		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}





	#ACTUALIZACIO´N  DE INVENTARIO
#-------------------------------------

	public static function actualizarItemIventarioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla  SET
	
	marca_item=:marcaItem,
	modelo_item=:modeloItem,
	serial_item=:serialItem,
	placaIdemia_item=:placaIdemiaItem,
	obser_item=:obsvItemEdit,
	estado_item=:estadoItem
	
	 WHERE id_iven=:idItemIven");


		$stmt->bindParam(":idItemIven", $datosModelo["idItemIven"], PDO::PARAM_INT);
		$stmt->bindParam(":marcaItem", $datosModelo["marcaItem"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloItem", $datosModelo["modeloItem"], PDO::PARAM_STR);
		$stmt->bindParam(":serialItem", $datosModelo["serialItem"], PDO::PARAM_STR);
		$stmt->bindParam(":placaIdemiaItem", $datosModelo["placaIdemiaItem"], PDO::PARAM_STR);
		$stmt->bindParam(":obsvItemEdit", $datosModelo["obsvItemEdit"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoItem", $datosModelo["estadoItem"], PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}




	#ACTUALIZACIO´N  DE INVENTARIO
#-------------------------------------

	public static function actualizarElementosInventarioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla  SET
	nom_element=:nomElmentEditar,
	tip_element=:tipoElementEditar
	
	
	 WHERE id_element=:idElmentEditar");


		$stmt->bindParam(":idElmentEditar", $datosModelo["idElmentEditar"], PDO::PARAM_INT);
		$stmt->bindParam(":nomElmentEditar", $datosModelo["nomElmentEditar"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoElementEditar", $datosModelo["tipoElementEditar"], PDO::PARAM_STR);


		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}







	#CONSULTA  DE USUARIOS 
#-------------------------------------


	public static function consulitemNofijosModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare(" SELECT  count(*) as conteo,element_iventario.nom_element,element_iventario.id_element FROM `inventario` 
	INNER JOIN element_iventario on inventario.nom_item=element_iventario.id_element 
	where inventario.estado_item=1 GROUP BY inventario.nom_item
	
	");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}





	#CONSULTA  DE USUARIOS 
#-------------------------------------


	public static function consuconutAccesoModelo($tabla)
	{


		$stmt = Conexion::conectar()->prepare(" SELECT  count(*) as conteo,element_iventario.nom_element,element_iventario.id_element FROM inventario_accesorios
	INNER JOIN element_iventario on inventario_accesorios.acces_elmenId_iven=element_iventario.id_element 
	where inventario_accesorios.acces_esta_iven=1 GROUP BY inventario_accesorios.acces_elmenId_iven
	
	");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}







	public static function ingresarMovInventarioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (Iv_Mo_item,Iv_Mo_ing,Iv_Mo_fecha) VALUES (:idItemIven,:usuario,current_timestamp())");

		$stmt->bindParam(":idItemIven", $datosModelo["idTime"], PDO::PARAM_INT);
		$stmt->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}







	public static function consAsigancionItemIventarioModelo($idItemIven, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("
	select usuarios.nombres,mov_invetario.Iv_Mo_fecha,mov_invetario.Iv_Mo_id,mov_invetario.Iv_Mo_item from $tabla 
	INNER JOIN usuarios ON mov_invetario.Iv_Mo_ing=usuarios.usuario 
	

	where Iv_Mo_item=:idItemIven order by mov_invetario.Iv_Mo_fecha desc ");

		$stmt->bindParam(":idItemIven", $idItemIven, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}



	public static function consulElementModelo()
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM element_iventario");


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}






	#BORRAR DE INPUTS
#-------------------------------------

	public static function BorradoElementosInventarioModelo($datosModel, $tabla)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_element = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}










	public static function registrarAccesorioModelo($datosModelo, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (acces_elmenId_iven,acces_ob_iven,acces_esta_iven,acces_fech_iven) VALUES (:idacceso,:obseacce,1,current_timestamp())");

		$stmt->bindParam(":idacceso", $datosModelo["idacceso"], PDO::PARAM_INT);
		$stmt->bindParam(":obseacce", $datosModelo["obseacce"], PDO::PARAM_STR);
		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}








	public static function comprobarSerialModelo($serial,$tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
	WHERE serial_item =:cserial
	");

$stmt->bindParam(":cserial",$serial, PDO::PARAM_STR);


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}







	public static function comprobarPlacaIdemialModelo($placaIdemia,$tabla)
	{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
	WHERE placaIdemia_item =:placaIdemia
	");

$stmt->bindParam(":placaIdemia",$placaIdemia, PDO::PARAM_STR);


		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();

	}






	public static function MarcadooAccModelo($idItemIven, $tabla)
	{


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET acces_esta_iven='0' WHERE acces_id_iven=:idItemIven");

		$stmt->bindParam(":idItemIven", $idItemIven, PDO::PARAM_INT);
		if ($stmt->execute()) {

			return "success";

		} else {

			return "error";

		}

		$stmt->close();

	}

	










}