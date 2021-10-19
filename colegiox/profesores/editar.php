<?php
include("db.php");


if(isset($_GET['pro_cod'])){
    $pro_cod = $_GET['pro_cod'];
    $query = "SELECT * FROM profesores WHERE pro_cod=$pro_cod";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $codigo = $row['pro_cod'];
        $nombre = $row['pro_nom'];
        $apellido = $row['pro_ap'];
    }


    if(isset($_POST['updatepro'])){
        $est_cod =$_GET['pro_cod'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
    
        $query = "UPDATE profesores SET pro_nom='$nombre',pro_ap='$apellido' WHERE pro_cod = $pro_cod";
        mysqli_query($conn,$query);
        header("Location: inicio.php");
        
    }
}

?>

<?php include("../includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="editar.php?pro_cod=<?php echo $_GET['pro_cod']?>" method = POST>
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Actualizar Nombre.">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" placeholder="Actualizar Apellido.">
                </div>
                <input type="submit" name="updatepro" value="Actualizar">
            </form>
        </div>
    </div>
</div>


<?php include("../includes/footer.php")?>