<?php

//Configuracion de la conexion a base de datos
  $bd_host = "localhost";
  $bd_usuario = "root";
  $bd_password = "archie";
  $bd_base = "tramitesgeo";


$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
mysql_select_db($bd_base, $con);


mysql_set_charset('utf8');

//variables POST
  $fechatramite  = $_POST['fechatramite'];
  $curp = $_POST['curp'];
  $nombre=$_POST['nombre'];
  $appaterno=$_POST['appaterno'];
  $apmaterno=$_POST['apmaterno'];
  $telefono  = $_POST['telefono'];
  $extension = $_POST['extension'];
  $telefonomovil = $_POST['telefonomovil'];
  $email = $_POST['email'];
  $vialidad = $_POST['vialidad'];
  $calle = $_POST['calle'];
  $numeroexte = $_POST['numeroexte'];
  $numeinte = $_POST['numeinte'];
  $codigopostal = $_POST['codigopostal'];
  $colonia = $_POST['colonia'];
  $municipio = $_POST['municipio'];
  $estado = $_POST['estado'];
  $tipobeca = $_POST['tipobeca'];
  $cicloescolar = $_POST['cicloescolar'];
  $propedeutico = $_POST['propedeutico'];
  $especialidad = $_POST['especialidad'];
  $maestria = $_POST['maestria'];
  $doctorado = $_POST['doctorado'];
  $otrabeca = $_POST['otrabeca'];
  $otroingreso = $_POST['otroingreso'];
  $observaciones = $_POST['observaciones'];



//registra los datos del registrouser
  $sql="INSERT INTO registrobeca (folio, homoclave, fechatramite, curp, nombre, appaterno, apmaterno, telefono, extension, telefonomovil, email, vialidad, calle, numeroexte, numeinte, codigopostal, colonia, municipio, estado,tipobeca, cicloescolar, propedeutico, especialidad, maestria, doctorado, otrabeca, otroingreso, observaciones)
        VALUES ('$folio', 'CIGCET-90A-02', '$fechatramite', '$curp', '$nombre', '$appaterno', '$apmaterno', '$telefono', '$extension', '$telefonomovil', '$email', '$vialidad', '$calle', '$numeroexte', '$numeinte', '$codigopostal', '$colonia', '$municipio', '$estado', '$tipobeca', '$cicloescolar', '$propedeutico', '$especialidad', '$maestria', '$doctorado', '$otrabeca', '$otroingreso', '$observaciones')";
mysql_query($sql,$con) or die('Error. '.mysql_error());

include('consulta.php');




?>
