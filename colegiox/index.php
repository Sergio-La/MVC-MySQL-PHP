<?php include ("db.php");//Requerir conexion, para que apenas inicie la aplicación empiece a conectar ?>
<?php include ("includes/header.php");//Contiene la cabecera?>
  <div class="container p-4">
  <nav>
		<ul>
			<li><a href="estudiantes/inicio.php">Listar Estudiantes</a></li>
			<li><a href="profesores/inicio.php">Listar Profesores</a></li>
			<li><a href="#">Listar Materias</a></li>
			<li><a href="salones/inicio.php">Listar Salones</a></li>
		</ul>
	</nav>
  </div>
<?php include ("includes/footer.php");//Contiene el resto de la página?>
