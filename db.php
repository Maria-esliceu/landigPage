<?php 
//Parametros de conexión
$servername="localhost";
$username="maria";
$password="1234";
$dbname="formacion";

//Crear la conexión
$conn=new mysqli($servername,$username,$password,$dbname);

//Comprobar la conexión
if($conn->connect_error){
    //la conexión ha ido mal
    die("Conexión fallida: ". $conn->connect_error);
}

//echo "LA CONEXIÓN HA SIDO UN EXITO";