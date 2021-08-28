<?php
include("../class/Conection.php");
$insert = new Connection;

if (isset($_POST)&& !empty($_POST)) {
    $id = $insert-> sentize($_POST['id']);
    $name = $insert -> sentize($_POST['nombre']);
    $last_name = $insert -> sentize($_POST['lastName']);
    $email = $insert -> sentize($_POST['status']);
    $status = $insert -> sentize($_POST['estado']);

    $result = $insert -> insert($id, $name, $last_name, $email, $status);

    if($result){
      echo"datos insertados"; 
    }else{
      echo"error al insertar";
    }
}


?>