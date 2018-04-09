<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link  href='https://fonts.googleapis.com/ccs?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesone/4.5.0/css/font-awesone.min.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="Subir fotos</h1>
		</div>
	</header>
	
	<div class="contenedor">
		<form class="formulario" method="post" enctype="multipart/form/data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 	
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Selecciona el titulo</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripcion:</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

			<?php if(isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif ?>		 

			<input type="submit" class="submit" name="subir" value="Subir foto"> 

		</form>
	</div>


		<!-- <footer >
			<p class="footer">Galeria creada por udemy</p>
		</footer> -->
</body>
</html>