<?php

include("conexion.php");
$con=conectar();

$especie=$_GET['ID'];

$sql="DELETE FROM anim_extin WHERE especie='$especie'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location: anim_extin.php"); 
    }

?>