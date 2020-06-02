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

  // Obtengo los datos cargados
  $propietario = $_POST['propietario'];
  
  // Consulta
  $sql = "SELECT * from notas WHERE propietario = $propietario";
  $resultado = $conn->query($sql);
  echo $resultado;

 mysqli_close($conn);
?>