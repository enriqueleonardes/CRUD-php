<?php require_once'assets/conexion/logica.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	
	<title>Sistema de CRUD</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="assets/lib/Bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

</head>

<body>
	<div class="container-fluid">
	<div class="row">

	<div class="container-fluid col-md-2 mb-0 pb-0 bg-dark">
		<img src="assets/imagenes/usuario.jpg" class="border-light mt-5 w-100" style="border-radius: 5%;">
		<h5 class="text-white mt-2" align="center">Administrador</h5>

		<ul class="listado mt-3">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Categoría</a></li>
			<li><a href="#">Productos</a></li>
			<li><a href="#">Usuarios</a></li>
			<li><a href="#">Salir</a></li>
		</ul>

	</div>

<div class="container-fluid col-md-10">
<div class="row">
	<div class="container col-md-12 bg-white">
	
	<center>
		
		<h1>Agregar Usuario</h1>
		
		<br>
	</center>

	<form action="" method="POST" enctype="multipart/form-data" class="form-row">
		
	
		<input type="hidden" class="form-control" required name="textID" value="<?php echo $textID;?>" id="textID" require="">

		<div class="col-md-6">
		
		<label><strong>Nombre(s):</strong></label>

		<input type="text" class="form-control" required name="textNombre" value="<?php echo $textNombre;?>" id="textNombre" require="" placeholder="Ingrese Un Nombre">
		<br>
		
		</div>

		<div class="col-md-6">
		
		<label><strong>Apellido Primario:</strong></label>

		<input type="text" class="form-control" required name="textApellidoP" value="<?php echo $textApellidoP;?>" id="textApellidoP" require="" placeholder="Ingrese Su Primer Apellido">
		<br>
		
		</div>

		<div class="col-md-6">
		
		<label><strong>Apellido Segundario:</strong></label>

		<input type="text" class="form-control" required name="textApellidoM" value="<?php echo $textApellidoM;?>" id="textApellidoM" require="" placeholder="Ingrese Su Segundo Apellido">
		<br>
		
		</div>
			<div class="col-md-6">
		
		<label><strong>Cedula:</strong></label>

		<input type="text" class="form-control" required name="textcedula" value="<?php echo $textcedula;?>" id="textcedula" require="" placeholder="Ingrese Una Cedula">
		<br>
	
	</div>

				<div class="col-md-6">
		
		<label><strong>Contrasena:</strong></label>

		<input type="text" class="form-control" required name="textcontrasena" value="<?php echo $textContrasena;?>" id="textcontrasena" require="" placeholder="Ingrese Una Contrasena">
		<br>
	
	</div>

	<div class="col-md-6">
		
		<label><strong>Correo:</strong></label>

		<input type="email" class="form-control" required name="textcorreo" value="<?php echo $textCorreo;?>" id="textcorreo" require="" placeholder="Ingrese Un Correo">
		<br>
	
	</div>

	<div class="col-md-6 mb-3 mt-3">
	
	<button value="btnAgregar" type="submit" name="accion" class="btn btn-success btn-block">Agregar</button>
	
	</div>

	<div class="col-md-6 mb-3 mt-3">

	<button value="btnModificar" type="submit" name="accion" class="btn btn-primary btn-block">Modificar</button>
	
	</div>

	<div class="col-md-12 mb-3">
	
	<button value="btnEliminar" type="submit" name="accion" class="btn btn-danger btn-block mb-6" onclick="return Confirmar('Quieres Eliminar Este Elemento ?');">Eliminar</button>
	
	</div>


	</form>

	</div>
	<div class="container col-md-12">
	<div class="row" style="overflow:scroll; height:435px;">

		<table class="table bg-white">

		<thead>

			<tr class="bg-light">

				<th>Nombre</th>

				<th>ApellidoP</th>

				<th>ApellidoM</th>

				<th>Cedula</th>

				<th>Correo</th>

				<th>Contrasena</th>

				<th>Acciones</th>
			</tr>
		</thead>

	<?php foreach($listaEmpleados as $empleados){ ?>

		<tr >

			<td><?php echo $empleados['nombre']; ?></td>

			<td><?php echo $empleados['apellidoP']; ?></td>

			<td><?php echo $empleados['apellidoM']; ?></td>

			<td><?php echo $empleados['cedula']; ?></td>

			<td><?php echo $empleados['correo']; ?></td>

			<td><?php echo $empleados['contrasena']; ?></td>


				<td>

					<form action="" method="POST">
						
						<input type="hidden" name="textID" value="<?php echo $empleados['ID']; ?>">

						<input type="hidden" name="textNombre" value="<?php echo $empleados['nombre']; ?>">

						<input type="hidden" name="textApellidoP" value="<?php echo $empleados['apellidoP']; ?>">

						<input type="hidden" name="textApellidoM" value="<?php echo $empleados['apellidoM']; ?>">

						<input type="hidden" name="textcedula" value="<?php echo $empleados['cedula']; ?>">

						<input type="hidden" name="textcorreo" value="<?php echo $empleados['correo']; ?>">

						<input type="hidden" name="textcontrasena" value="<?php echo $empleados['contrasena']; ?>">


						<input type="submit" name="accion" value="Seleccionar" class="btn btn-success btn-block">

						<button value="btnEliminar" type="submit" name="accion" onclick="return Confirmar('Quieres Eliminar Este Elemento?');" class="btn btn-danger btn-block">Eliminar</button>

					</form>
			
				</td>
		
		</tr>

	<?php } ?>

	</table>
</div>	
</div>
</div>
</div>
</div>
</div>
<script src="assets/js/script.js"></script>
<script src="assets/lib/Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/lib/Bootstrap/js/popper.min.js"></script>
<script src="assets/lib/Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>