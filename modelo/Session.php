<?php 

class Session
{


function validity()
{

session_start();

if (!isset($_SESSION[KEY.CODIGO])) 
{

 header('Location: '.URL.'');

} 

}



}





 ?>