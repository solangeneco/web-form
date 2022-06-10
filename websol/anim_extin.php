<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM anim_extin"; // selecionar todo lo que se encuntre en anim_extin
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query); //dirige a la tabla especifica

?>






