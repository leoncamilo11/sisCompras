<?php
  /**
   *
   */
  class Conexion
  {

    function conectar()
    {
      $conn = new PDO("mysql:host=localhost; port=3306; dbname=controlcomprasdb", "root", "admin13579");
      $conn -> exec("SET CHARACTER SET utf8");
      /*if ($conn){
				 echo ("Conexion exitosa con la base de datos");
			 } else {
				 echo ("No se puede conectar con la base de datos");
			 }*/
       return $conn;
    }
  }

 ?>
