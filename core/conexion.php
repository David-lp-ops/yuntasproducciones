<?php
  // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'yuntas';

  // Conexión a bd - MySQL
  $conn = mysqli_connect($server, $user, $pass, $db);

  // if(isset($conn)){
  //   echo 'DB is connect'
  // }
?>