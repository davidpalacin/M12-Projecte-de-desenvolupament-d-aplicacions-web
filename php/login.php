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
  echo('sa conectao mu bien');

  // Obtengo los datos cargados en el formulario de login.
  $nombre = $_POST['nombre'];
  $contra = $_POST['contra'];
  
  // Consulta
  $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";  
  $resultado = $conn->query($sql);

  $row = $resultado->fetch_array(MYSQLI_ASSOC);
 
if ($contra==$row['contra']) { 
    $_SESSION['id'] = $row['id'];
    echo "<br><br><a href=../inicio.html>Ir al inicio</a>";  
 }else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='../login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conn);
?>


