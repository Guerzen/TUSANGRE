<?php 

include_once "cont.php";

$tipodoc=$_POST["tipoDocumento"];
$doc=$_POST["numdoc"];



$consulta = "SELECT * FROM persona WHERE tip_documento='$tipodoc' AND num_documento='$doc'";

$ejecutar = mysqli_query($con,$consulta);
if(mysqli_num_rows($ejecutar )>0){

   // echo "<script>window.location.href='../confirmacion.html'</script>";
    echo "<script>alert('TODO BIEN')</script>";
}else{
    echo "<script>alert('Algo salio mal')</script>";
    //echo "<script>window.location.href='../contrasena.html'</script>";
}



?>