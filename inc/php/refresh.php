<?php

include('./config.php');

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Error en la Conexion!!!: ' . mysql_error());
  }

mysql_select_db("$bd", $con);

$result = mysql_query("SELECT * FROM message ORDER BY id DESC");


while($row = mysql_fetch_array($result))
  {
  echo '<p>'.'<span>'.$row['sender'].'</span>'. '&nbsp;&nbsp;' . $row['message'].'</p>';
  }

mysql_close($con);
?>
