<?php
include ("db.php");
if(isset($_GET['sal_cod'])){
    $sal_cod = $_GET['sal_cod'];
    $query = "DELETE FROM salones WHERE sal_cod=$sal_cod";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Fallo al borrar.");
    }
        header("Location: inicio.php");
}
?>