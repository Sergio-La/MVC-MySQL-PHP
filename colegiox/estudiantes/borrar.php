<?php
include ("db.php");
if(isset($_GET['est_cod'])){
    $est_cod = $_GET['est_cod'];
    $query = "DELETE FROM estudiantes WHERE est_cod=$est_cod";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Fallo al borrar.");
    }
        header("Location: inicio.php");
}
?>