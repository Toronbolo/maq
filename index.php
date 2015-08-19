<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina de especificaciones</title>
	 <!-- Bootstrap, css, javascript-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<!-- Header -->
	<div class="container">
		<div class="col-md-12">
			<img src="images/header.png" alt="Encabezado" class="img-responsive">
		</div>

		<!-- Content -->
		<H1>Reporte de maquinas de costura</H1>
		<p class="top-p">Por favor llene los campos requeridos para poder realizar el reporte de su maquina</p>
		
		<!-- Formularios -->
		<form class="form-inline">
		  <div class="form-group">
		    <label for="codigo">Codigo</label>
		    <input type="text" class="form-control" id="codigo" placeholder="21045"> 
		  </div>
		  <br />
		  <br />
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="email" class="form-control" id="nombre" placeholder="Maria">
		  </div>
		  <div class="form-group">
		    <label for="apellido">Apellido</label>
		    <input type="email" class="form-control" id="apellido" placeholder="Polanco">
		  </div>
		  <br />
		  <br />
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>


		<!-- Footer -->
		<div class="col-md-12">
			<p class="firma">Yorki Bonilla</p>
			<img src="images/footer.png" alt="Pie de pagina" class="img-responsive">
		</div>
	</div>
</body>
</html>