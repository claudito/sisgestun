<?php 


include'autoload.php';
session_start();
if (!isset($_SESSION[KEY.CODIGO]))
{
  include'templates/acceso.php';
} 
else
{
  include'templates/home.php';
}

 ?>