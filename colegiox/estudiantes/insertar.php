<?php
    include("db.php");
    if(isset($_POST['insertest'])){
        $est_cod = $_POST['codigo'];
        $est_nom = $_POST['nombre'];
        $est_ap = $_POST['apellido'];
        $est_cur = $_POST['curso'];

    $query = "INSERT INTO estudiantes VALUES('$est_cod','$est_nom','$est_ap','$est_cur')";
    $result = mysqli_query($conn,$query);
        if(!$result){
            die("Insercion fallida");
        }
    }
    header ("Location: inicio.php");
?>