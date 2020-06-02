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

  // Obtengo los datos cargados en el formulario de login.
  $contenido = $_POST['contenido'];
  
  // Consulta
  $sql = "INSERT INTO notas(contenido) VALUES('$contenido')";
  $resultado = $conn->query($sql);

 mysqli_close($conn);
?>