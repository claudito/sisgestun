<?php 

class Funciones
{

function validar_xss($cadena)
{
$cadena = htmlspecialchars(trim($cadena), ENT_QUOTES,'UTF-8');
return $cadena;
}

function format_size($size) {
$mod = 1024;
$units = explode(' ','B KB MB GB TB PB');
for ($i = 0; $size > $mod; $i++) {
$size /= $mod;
}
return round($size, 2) . ' ' . $units[$i];
}


function restar_horas($inicio,$fin)
{
$dif=date("H:i", strtotime("00:00") + strtotime($fin) - strtotime($inicio) );
//return $dif;
$hora  = substr($dif,0,2);
$min   = substr($dif,3,2);
return $hora.'Hr '.$min.'Min';


}


}


 ?>