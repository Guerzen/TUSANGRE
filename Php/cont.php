<?php 
$host="localhost";
$port=3307;
$user="root";
$password="admin";
$dbname="tusangre";

$con = new mysqli($host,$user,$password,$dbname,$port);

if(!$con){
    echo "algo fallo";
}
else{
    echo "bien";
}



?>