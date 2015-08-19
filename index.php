<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina de especificaciones</title>
	 <!-- Bootstrap, css, javascript-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<script src="js/bootstrap.min.js"></script>
	<!-- Header -->
	<div class="container">
		<div class="col-md-12">
			<img src="img/header.png" alt="Encabezado" class="img-responsive">
		</div>

		<!-- Content -->
		<H1>Reporte de maquinas de costura</H1>
		<p class="top-p">Por favor llene los campos requeridos para poder realizar el reporte de su maquina</p>
		
	<!-- Formularios -->
		<!-- Informacion de usuario -->
		<H4>Informacion de usuario</H4>
		<form class="form-inline">
		  <div class="form-group">
		    <label for="codigo">Codigo</label>
		    <input type="text" class="form-control" id="codigo" placeholder="21045"> 
		  </div>
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
		  <label for="drop-down-equipo">Seleccione su equipo</label>
		  <select name="list-equipo" id="drop-down-equipo">
		  	<option value="a01">A01</option>
		  	<option value="a02">A02</option>
		  	<option value="a03">A03</option>
		  	<option value="a04">A04</option>
		  	<option value="a05">A05</option>
		  	<option value="a06">A06</option>
		  	<option value="a07">A07</option>
		  	<option value="a08">A08</option>
		  	<option value="a09">A09</option>
		  	<option value="a10">A10</option>
		  	<option value="a11">A11</option>
		  </select>

		  <label for="drop-down-supervisor">Seleccione su supervisor</label>
		  <select name="list-supervisor" id="drop-down-supervisor">
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  	<option value="ana polanco">Ana Polanco</option>
		  </select>
		  <!-- Informacion de usuario -->

		  <!-- Reporte de problema -->
		  <br />
		  <br />
		  <label for="drop-down-operacion">Seleccione la operacion</label>
		  <select name="list-operacion" id="drop-down-operacion">
		  	<option value="rc">RC</option>
		  	<option value="uh">UH</option>
		  	<option value="hc">HC</option>
		  	<option value="mc">MC</option>
		  	<option value="dc">DC</option>
		  	<option value="dp">DP</option>
		  	<option value="pv">PV</option>
		  	<option value="st">ST</option>
		  	<option value="mm">MM</option>
		  	<option value="cm">CM</option>
		  	<option value="rm">RM</option>
		  </select>

		  <label for="drop-down-problema">Seleccione problema</label>
		  <select name="list-problema" id="drop-down-problema">
		  	<option value="salto">Salto</option>
		  	<option value="rompe hilo">Rompe hilo</option>
		  	<option value="parte aguja">Parte aguja</option>
		  	<option value="mc">MC</option>
		  	<option value="dc">DC</option>
		  	<option value="dp">DP</option>
		  	<option value="pv">PV</option>
		  	<option value="st">ST</option>
		  	<option value="mm">MM</option>
		  	<option value="cm">CM</option>
		  	<option value="rm">RM</option>
		  </select>
		  <!-- Reporte de problema -->
		  <br />
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>
		<!-- Footer -->
		<div class="col-md-12">
			<p class="firma">Yorki Bonilla</p>
			<img src="img/footer.png" alt="Pie de pagina" class="img-responsive">
		</div>
	</div>
</body>
</html>