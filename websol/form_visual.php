<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM anim_extin";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <body>

        <header>
            
        </header>
        <div class="container mt -5">
            <div class="row">

                <div class="col -md -3">
                    <h1> Ingrese Datos</h1>
                        <form action="insertar.php" method="PORST">
                            <input type="text" class="form-control mb -3" name="especie" placeholder="Especie">
                            <input type="text" class="form-control mb -3" name="nombre" placeholder="Nombre">
                            <input type="text" class="form-control mb -3" name="alimentacion" placeholder="Alimentacion">
                            <input type="text" class="form-control mb -3" name="habitat" placeholder="Habitat">
                            
                            <input type="submit" class="btn btn-primary"
                        </form>
                </div>

                <div class="col -md -8">
                    <table class"table">
                        <thead class="table-success table-striped">
                        
                            <tr>
                                <th>Especie</th>
                                <th>Nombre</th>
                                <th>Alimentacion</th>
                                <th>Habitat</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){ //se crea un arreglo para que cada vez que se pida un dato se agrege a los campos
                            ?>
                                <tr>
                                    <th><?php echo $row['especie']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['alimentacion']?></th>
                                    <th><?php echo $row['habitat']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['especie'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['especie'] ?>" class="btn btn-danger">Eliminar</a></th>                       
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </body>
</head>