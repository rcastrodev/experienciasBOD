<?php
$server = "PROGRAMAEXPERIE";
$options = array(  "UID" => "administrator",  "PWD" => "L0y4lf33l.21",  "Database" => "ProgramaExperiencias", "CharacterSet" => "UTF-8");

/*error_reporting(E_ALL);
ini_set('error_reporting',E_ALL);

ini_set('display_errors',1);*/
/*$server = "198.154.99.4";
$options = array(  "UID" => "pasaporteuser",  "PWD" => "mermalade02",  "Database" => "ProgramaExperiencias", "CharacterSet" => "UTF-8");*/
$conn = sqlsrv_connect($server, $options);

if($conn)

{

	

	$jsondata = array(); 
	$jsondataList = array();

	if($_GET['param1']=="cuantos")   // Obtener el numero de registros
	{

		$check = array(
    		$idUser,
    		$mes,
    		$anho
    	);
    	
    	$sqlsrv = "select COUNT(*) as total from dbo.Restaurantes where Pais like '%".$_GET['Pais']."%'  and Ciudad like '%".$_GET['Ciudad']."%' ";
    	$query = sqlsrv_query( $conn, $sqlsrv, $check );
    	$rows = sqlsrv_has_rows( $query );
    	
    	if($rows === true) {
    		
    		if( $query != false) { 
    			while( $fila = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC) ) {
    				  $result = $fila["total"];
    			}
    			sqlsrv_free_stmt($query);
    		}
    
    	}else{
    		//$result = "EQ1";
    	}
    	
    	

		$jsondata['total'] = $result; // Guardamos el resultado para despues condificarlo en JSON
		$jsondata["consulta"] = $sqlsrv;
	}
	elseif($_GET["param1"]=="dame")
	{
		
		$check = array(
    		$idUser,
    		$mes,
    		$anho
    	);
    	
    	//$sqlsrv = "select * from MGourmet where Estatus=1 LIMIT ".$_GET['limit']." OFFSET ".$_GET["offset"];
    	$sqlsrv = "select top ".$_GET['limit']." * from (select *, ROW_NUMBER() over (order by Descuento Desc) as r_n_n 
      from dbo.Restaurantes where Pais like '%".$_GET['Pais']."%'  and Ciudad like '%".$_GET['Ciudad']."%'  ) xx where r_n_n >=".$_GET["offset"]." ";
    	
    	
    	
    	$query = sqlsrv_query( $conn, $sqlsrv, $check );
    	$rows = sqlsrv_has_rows( $query );
    	
    	if($rows === true) {
    		
    		if( $query != false) { 
    			while( $fila = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC) ) {
    				  //$result = $fila["total"];
    				  	/*$jsondataperson = array();
            			$jsondataperson["id"] = $fila["idEstablecimiento"];
            			$jsondataperson["nombre"] = $fila["Nombre"];
            			$jsondataperson["apellidopaterno"] = $fila["Descripcion"];
            			$jsondataperson["apellidomaterno"] = $fila["imagen"];*/
            
            			$jsondataList[]=$fila;
    			}
    			sqlsrv_free_stmt($query);
    		}
    
    	}else{
    		//$result = "EQ1";
    	}
		
		
		

		$jsondata["lista"] = array_values($jsondataList);
		$jsondata["consulta"] = array($sqlsrv);
	}

header("Content-type:application/json; charset = utf-8"); // Decimos que la informacion de retorno es json en utf
echo json_encode($jsondata); // Codificamos la informacion del array en JSON
exit();
}else{
	echo "Fallo al conectar";
}

?>