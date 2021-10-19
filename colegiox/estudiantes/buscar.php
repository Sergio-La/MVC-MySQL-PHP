<?php include("../includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="buscar.php" method = POST>
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Buscar Nombre.">
                </div>
                <input type="submit" name="buscar" value="Buscar">
            </form>
        </div>
    </div>
</div>

<div class="col -md-8">
        <table border = 1>
           <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curso</th>
                </tr>
           </thead> 
           <tbody>
                <?php
                include("db.php");

                if(isset($_POST['buscar'])){
                    $nombre = $_POST['nombre'];
                
                $query = "SELECT * FROM estudiantes WHERE est_nom LIKE '$nombre%'";
                $result_sal = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_array($result_sal)){ ?>
                    <tr >
                        <td><?php echo $row['est_cod'] ?></td>
                        <td><?php echo $row['est_nom'] ?></td>
                        <td><?php echo $row['est_ap'] ?></td>
                        <td><?php echo $row['est_cur'] ?></td>
                    </tr>
                <?php }} ?>
           </tbody>
        </table>
    </div>
</div>



<?php include("../includes/footer.php")?>