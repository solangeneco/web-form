<?php

    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM anim_extin WHERE especie='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    
?>

<body>
        <div class="container mt-5">
                <form action="editar.php" method="POST">
                    
                            <input type="hidden" name="especie" value="<?php echo $row['especie']  ?>">
                                
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                            <input type="text" class="form-control mb-3" name="alimentacion" placeholder="alimentacion" value="<?php echo $row['alimentacion']  ?>">
                            <input type="text" class="form-control mb-3" name="habitat" placeholder="habitat" value="<?php echo $row['habitat']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
                    
        </div>
</body>