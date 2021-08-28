<?php
  include("../class/Conection.php");

  $connect = new Connection;

  $result = $connect->connection();

  if($connect){
    echo "conexion exitosa";
  }else{
    echo "la conexion falo";
  }

?>