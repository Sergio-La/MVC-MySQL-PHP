<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
</head>
<body>
    <nav>
    <div class="container">
    <a href = "../index.php">Inicio</a>
    </div>
    </nav>

<div class="container p-4">
    <div class="col-md-2">
        <form action = "insertar.php" method=POST>
            <div class="form-group">
                <input type="text" name="codigo" placeholder="Código">
            </div>
            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" name="apellido" placeholder="Apellido">
            </div>
            <input type="submit" name="insertpro" value="Insertar">
        </form>
    </div>

    <div class="col -md-8">
        <table border = 1>
           <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
           </thead> 
           <tbody>
                <?php
                $query = "SELECT * FROM profesores";
                $result_sal = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_array($result_sal)){ ?>
                    <tr >
                        <td><?php echo $row['pro_cod'] ?></td>
                        <td><?php echo $row['pro_nom'] ?></td>
                        <td><?php echo $row['pro_ap'] ?></td>
                        <td>
                        <a href="editar.php?pro_cod=<?php echo $row['pro_cod']?>">Editar</a>
                        <a href="borrar.php?pro_cod=<?php echo $row['pro_cod']?>">Borrar</a>                      
                        </td>
                    </tr>
                <?php } ?>
           </tbody>
        </table>
    </div>
</div>

</body>
</html>