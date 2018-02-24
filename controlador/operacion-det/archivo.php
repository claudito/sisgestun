<?php 

include'../../autoload.php';
Session::validity();

$operacion =  $_POST['id'];
$file      =  $_FILES['file'];
$date      =  date('d-m-Y-H-i-s');
$filename  =  $file['tmp_name'];
$size      =  $file['size'];

$ruta        =  $date."-".$operacion."-".$file['name'];
$destination =  "../../uploads/".$ruta;

$extension   =  pathinfo($file['name'],PATHINFO_EXTENSION);

if (move_uploaded_file($filename, $destination))
{

	$objeto =  new Operacion_archivo($operacion,$file['name'],$ruta,$extension,$size);
	$data   =  $objeto->agregar();

	if($data=='ok')
	{
	
	echo "
	<script>
	alert('Archivo Subido Correctamente');
	window.location='".URL."pages/incidente-det?id=".$operacion."';
	</script>";

	}
	else
	{
	echo "
	<script>
	alert('Error al cargar el archivo');
	window.location='".URL."pages/incidente-det?id=".$operacion."';
	</script>";
	}

} 
else
{
 echo "
	<script>
	alert('Error al cargar el archivo');
	window.location='".URL."pages/incidente-det?id=".$operacion."';
	</script>";
}


 ?>