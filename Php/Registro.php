<?php 

include_once "cont.php";


$nom1=$_POST["Nom1"];
$nom2=$_POST["Nom2"];
$ape1=$_POST["Ape1"];
$ape2=$_POST["Ape2"];
$tipodoc=$_POST["tipoDocumento"];
$numeroDoc=$_POST["numeroDoc"];
$fechana=$_POST["fechaNaci"];
$tele=$_POST["tele"];
$sexo=$_POST["sexo"];
$tipoSangre=$_POST["tipoSangre"];
$corre=$_POST["corre"];
$contra=$_POST["contra"];



  $fechaNacimiento = new DateTime($_POST['fechaNaci']);
  $hoy = new DateTime();
  $edad = $hoy->format('Y') - $fechaNacimiento->format('Y');
  $mes = $hoy->format('m') - $fechaNacimiento->format('m');
  
  if ($mes < 0 || ($mes === 0 && $hoy->format('d') < $fechaNacimiento->format('d'))) {
      $edad--;
  }

  if ($edad < 18) {

    echo "DEBE SER MAYOR DE EDAD";

  } else {
    $consulta = "INSERT INTO persona (Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, fecha_nacimiento, numero_telefon, correo_electronico, tip_documento, tipsangre, num_documento, Contrasena, sexo) VALUES ('$nom1', '$nom2', '$ape1', '$ape2', '$fechana', '$tele', '$corre', '$tipodoc', '$tipoSangre', '$numeroDoc', '$contra', '$sexo')";

    $ejecutar = mysqli_query($con, $consulta);

      if ($ejecutar) {
        echo "DATOS INSERTADOS CORRECTAMENTE ";
    } else {
    }

  }









?>
