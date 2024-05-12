<?php 

include_once "cont.php";

$tipodoc=$_POST["tipoDocumento"];
$doc=$_POST["numdoc"];
$pass=$_POST["pass"];


$consulta = "SELECT * FROM persona WHERE tip_documento='$tipodoc' AND num_documento='$doc' AND Contrasena='$pass'";

$ejecutar = mysqli_query($con,$consulta);
if(mysqli_num_rows($ejecutar )>0){

    echo "<script>window.location.href='../Hiniciado.html'</script>";
}else{
    echo "<script>alert('Algo salio mal')</script>";
    echo "<script>window.location.href='../login.html'</script>";
}



?>