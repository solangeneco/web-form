<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="reino_animal";

    $con=mysqli_connect($host,$user,$pass); //sevidor encuntre bace de datos

    mysqli_select_db($con,$bd); //ingresa a una variable especifica bd

    return $con;
}


?>