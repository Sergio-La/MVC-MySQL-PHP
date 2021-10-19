<?php
    include("db.php");
    if(isset($_POST['insertsal'])){
        $sal_cod = $_POST['codigo'];
        $sal_cur = $_POST['curso'];

    $query = "INSERT INTO salones VALUES('$sal_cod','$sal_cur')";
    $result = mysqli_query($conn,$query);
        if(!$result){
            die("Insercion fallida");
        }
    }
    header ("Location: inicio.php");
?>