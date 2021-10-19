<?php
    include("db.php");
    if(isset($_POST['insertpro'])){
        $pro_cod = $_POST['codigo'];
        $pro_nom = $_POST['nombre'];
        $pro_ap = $_POST['apellido'];

    $query = "INSERT INTO profesores VALUES('$pro_cod','$pro_nom','$pro_ap')";
    $result = mysqli_query($conn,$query);
        if(!$result){
            die("Insercion fallida");
        }
    }
    header ("Location: inicio.php");
?>