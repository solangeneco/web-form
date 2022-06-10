<?php

    include("conexion.php"); //coneccion
    $con=conectar();

    $especie=$_POST['especie'];
    $nombre=$_POST['nombre'];
    $alimentacion=$_POST['alimentacion'];
    $habitat=$_POST['habitat'];


    $sql="INSERT INTO anim_extin VALUES('$especie', '$nombre', '$alimentacion', $habitat')";
    $query= mysqli_query($con,$sql); // tiene que realizar lo que se le esta pidiendo 

    if($query){
        header("Location: anim_extin.php");
    }else{

    }


?>