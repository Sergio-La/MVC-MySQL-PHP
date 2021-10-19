<?php
include ("db.php");
    if(isset($_GET['sal_cod'])){
        $sal_cod = $_GET['sal_cod'];
        $query = "SELECT * FROM salones WHERE sal_cod=$sal_cod";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $codigo = $row['sal_cod'];
            $curso = $row['sal_cur'];
        }
    }


    if(isset($_POST['updatecur'])){
        $sal_cod =$_GET['sal_cod'];
        $curso = $_POST['curso'];

        $query = "UPDATE salones SET sal_cur=$curso WHERE sal_cod = $sal_cod";
        mysqli_query($conn,$query);
        header("Location: inicio.php");
        
    }
?>

<?php include("../includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="editar.php?sal_cod=<?php echo $_GET['sal_cod']?>" method = POST>
                <div class="form-group">
                    <input type="text" name="curso" placeholder="Actualizar Curso.">
                </div>
                <input type="submit" name="updatecur" value="Actualizar">
            </form>
        </div>
    </div>
</div>

<?php include("../includes/footer.php")?>
