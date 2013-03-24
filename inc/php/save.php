<?php

include('./config.php');

if (isset($_POST['text'])) {

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Error en la Conexion!!!: ' . mysql_error());
  }

mysql_select_db("$bd", $con);

$ddd=$_POST['text'];
  $query = "INSERT INTO message (message) VALUES ('$ddd')";
	
}

?>
