<?

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php
include("./class/Conection.php");
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
  <div class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-body">
          <form action="" method="post"                                                                                                                                                                                                      >
            <div class="form-group">
              <input type="number" name="id" class="form-control m-2 me-2" placeholder="ID">
              <input type="text" name="nombre" class="form-control m-2 me-2 " placeholder="Nombre">
              <input type="text" name="lastName"class="form-control m-2 me-2 " placeholder="Segundo Nombre">
              <input type="email" name="email" class="form-control m-2 me-2 " placeholder="Email">
              <input type="number" name="status" class="form-control m-2 me-2 " placeholder="Status">
              <input type="submit" value="Enviar" class="btn btn-success btn-block">
            </div>
          </form>
        </div>
      </div>
       <div class="col-md-8">
      <table class="table table-border">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Segundo Nombre</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Accion</th>
          </tr>
        </thead>
      </table>
    </div>
    </div>
  </div>
</body>
</html>