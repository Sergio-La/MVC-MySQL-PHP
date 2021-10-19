<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <nav>
        <div class="container">
        <a href = "../index.php">Inicio</a>
        </div>
        <div class="container">
        <a href = "buscar.php">Buscar</a>
        </div>
        <div class="container">
        <a href = "listar5.php">Listar5</a>
        </div>
    </nav>

<div class="container p-4">
    <div class="col-md-2">
        <form action = "insertar.php" method=POST>
            <div class="form-group">
                <input type="text" id = "cod" name="codigo" placeholder="Código">
            </div>
            <div class="form-group">
                <input type="text" id = "nom" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" id = "ap" name="apellido" placeholder="Apellido">
            </div>
            <div class="form-group">
                <input type="text" id = "cur" name="curso" placeholder="Curso">
            </div>
            <input type="submit" name="insertest" value="Insertar" onclick="return validar()">
        </form>
    </div>

    <div class="col -md-8">
        <table border = 1>
           <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
           </thead> 
           <tbody>
                <?php
                $query = "SELECT * FROM estudiantes";
                $result_sal = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_array($result_sal)){ ?>
                    <tr >
                        <td><?php echo $row['est_cod'] ?></td>
                        <td><?php echo $row['est_nom'] ?></td>
                        <td><?php echo $row['est_ap'] ?></td>
                        <td><?php echo $row['est_cur'] ?></td>
                        <td>
                        <a href="editar.php?est_cod=<?php echo $row['est_cod']?>">Editar</a>
                        <a href="borrar.php?est_cod=<?php echo $row['est_cod']?>">Borrar</a>                      
                        </td>
                    </tr>
                <?php } ?>
           </tbody>
        </table>
    </div>
</div>
        <script type="text/javascript" src="../js/validarest.js"></script>
</body>
</html>