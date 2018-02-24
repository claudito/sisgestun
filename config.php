<?php 

#Zona Horaria
date_default_timezone_set('America/Lima');
#url
define("URL","http://192.168.10/dev/tunel_gmb/");
#define("URL","http://localhost/dev/tunel_gmb/");
#folder
define("FOLDER", "/dev/tunel_gmb/");

#Datos de Conexión a Base de Datos
define("SERVER","localhost");
define("USER", "root");
define("PASS", "");
#define("PASS", "userperutecdb");
define("BD", "tunel_gmb");

#CONSTANTES VARIABLES SESION
define("KEY",$_SERVER['SERVER_NAME'].FOLDER);
define("CODIGO",  "CODIGO");
define("USUARIO", "USUARIO");
define("NOMBRES",  "NOMBRES");
define("APELLIDOS","APELLIDOS");




 ?>
