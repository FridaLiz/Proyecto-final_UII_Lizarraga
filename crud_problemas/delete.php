<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM problemas  WHERE idProblema='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: problemas.php");
    }
?>
