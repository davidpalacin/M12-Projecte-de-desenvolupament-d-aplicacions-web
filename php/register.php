<?php
  session_start();
  

  
  // Datos para conectar a la base de datos.
  $servername = "localhost";
  $database = "proyecto";
  $username = "root";
  $password = "root";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo('sa conectao mu bien <br>');

  // Obtengo los datos cargados en el formulario de login.
  $nombre = $_POST['nombre'];
  $contra = $_POST['contra'];
  
  // Consulta
  $sql = "INSERT INTO usuarios(nombre,contra) VALUES('$nombre','$contra')";
  $resultado = $conn->query($sql);

  echo 'Te has registrado correctamente, <a href="../login.html">Clica aquí</a> para iniciar sesión';

 mysqli_close($conn);
?>