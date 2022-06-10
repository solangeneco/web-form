<?php

    include("conexion.php");
    $con=conectar();


    $especie=$_POST['especie'];
    $nombre=$_POST['nombre'];
    $alimentacion=$_POST['alimentacion'];
    $habitat=$_POST['habitat'];

    $sql="UPDATE anim_extin SET nombre='$nombre' ,alimentacion='$alimentacion' ,habitat'$habitat' WHERE especies='$especies'";
    $query=mysqli_query($con,$sql);

    if($query){
        header("Location: anim_extin.php");
    }
?>