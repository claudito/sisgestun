<?php 

include'../autoload.php';
Session::validity();
$acceso = new Acceso();
$acceso->logout();



 ?>