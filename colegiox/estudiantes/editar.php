<?php
include("db.php");


if(isset($_GET['est_cod'])){
    $est_cod = $_GET['est_cod'];
    $query = "SELECT * FROM estudiantes WHERE est_cod=$est_cod";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $codigo = $row['est_cod'];
        $nombre = $row['est_nom'];
        $apellido = $row['est_ap'];
        $curso = $row['est_cur'];
    }
}

if(isset($_POST['updatees'])){
    $est_cod =$_GET['est_cod'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curso = $_POST['curso'];

    $query = "UPDATE estudiantes SET est_nom='$nombre',est_ap='$apellido', est_cur='$curso' WHERE est_cod = $est_cod";
    mysqli_query($conn,$query);
    header("Location: inicio.php");
    
}


?>

<?php include("../includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="editar.php?est_cod=<?php echo $_GET['est_cod']?>" method = POST>
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Actualizar Nombre.">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" placeholder="Actualizar Apellido.">
                </div>
                <div class="form-group">
                    <input type="text" name="curso" placeholder="Actualizar Curso.">
                </div>
                <input type="submit" name="updatees" value="Actualizar">
            </form>
        </div>
    </div>
</div>


<?php include("../includes/footer.php")?>