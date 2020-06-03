<?php
  require_once('abstract.databoundobject.php');
  session_start();

  // Datos para conectar a la base de datos.
  $servername = "localhost";
  $database = "proyecto";
  $username = "root";
  $password = "root";

  // Create objPDO
  $strDSN = "mysql:host=localhost;dbname=proyecto";
  $objPDO = new PDO($strDSN, "root", "root", []);
  $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  class Usuario extends DataBoundObject {

    protected $nombre;
    protected $contra;

    protected function DefineTableName() {
            return("usuarios");
    }

    protected function DefineRelationMap() {
            return(array(
                    "id" => "id",
                    "nombre" => "nombre",
                    "contra" => "contra"
            ));
    }

}

  // Obtengo los datos cargados en el formulario de login.
  $nombre = $_POST['nombre'];
  $contra = $_POST['contra'];

  $objUsuario = new Usuario($objPDO);

  $objUsuario->setnombre($nombre);
  $objUsuario->setcontra($contra);
  $objUsuario->Save();
  
  echo 'Te has registrado correctamente, <a href="../login.html">Clica aquí</a> para iniciar sesión';


?>