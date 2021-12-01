<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM servicios_empleados";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Servicios Empleados.Centro de computo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos Servicios empleados</h1>
                                <form action="insertar.php" method="POST">

                                    
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apelido">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="area" placeholder="Area en la que labora">
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio solicitado">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/PROYECTO_LIZARRAGA_CENTRO DE COMPUTO/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre </th>
                                        <th>Apellido </th>
                                        <th>Correo</th>
                                        <th>Area</th>
                                        <th>Servicio</th>
                                        <th>  Fecha   </th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idServicios']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['correo']?></th>    
                                                <th><?php  echo $row['area']?></th>
                                                <th><?php  echo $row['servicio']?></th>
                                                <th><?php  echo $row['fecha']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idServicios'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idServicios'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            } while($row=mysqli_fetch_array($query))
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>