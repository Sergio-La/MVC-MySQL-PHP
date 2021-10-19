<?php
include ("db.php");
if(isset($_GET['pro_cod'])){
    $pro_cod = $_GET['pro_cod'];
    $query = "DELETE FROM profesores WHERE pro_cod=$pro_cod";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Fallo al borrar.");
    }
        header("Location: inicio.php");
}
?>