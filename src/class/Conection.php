<?php
  class Connection{
    private $connect;
    private $nameHost = "localhost";
    private $root = " root";
    private $password = "";
    private $dataBase = "proyecto";    
  

  function __construct(){
    $this -> connection();
  }
 public function connection (){
    $this->connect = mysqli_connect
    (
      $this-> nameHost,
      $this-> root,
      $this-> password,
      $this-> dataBase
    );
    return $this->connect;
  }

  public function sentize($var){
    $retorna = mysqli_real_escape_string($this->connect, $var);
    return $retorna;
  }

  public function insert($id , $name, $last_name , $email, $status){
    $query = "INSERT INTO tarea(id, nombre, segundo_nombre, correo, estado) VALUES ($id, $name , $last_name, $email, $status)";
    $result = mysqli_query($this->connect, $query);
  }
}
?>