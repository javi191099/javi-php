<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>ejercicio 1</h1>
	<form action="#" method="POST">
		<label for="name"></label>
	<div>
   	<input type="text" name="nombre" id="name">
   </div>

    <div>
   	<input type="text" name="apellido 1" id="apellido 1">
   </div>

    <div>
   	<input type="text" name="apellido 2" id="apellido 2">
   </div>

<div>
	<input type="submit">
</div>
</form>
<?php  
if (isset($_POST["nombre"])) {
	if (empty($_POST["nombre"])) {
	     echo "<p>el nombre esta vacio</p>";
	}
}
if (empty($_POST["apellido 1"])) {
	     echo "<p>el apellido 1 esta vacio</p>";
	}

if (empty($_POST["apellido 2"])) {
	     echo "<p>el apellido 2 esta vacio</p>";
	}
if (!empty($_POST["nombre"]) && !empty($_POST["apellido 1"]) && !empty($_POST["apellido 2"])){
	echo "<p>".$_POST["nombre"]." ".$_POST["apellido 1"]." ".$_POST["apellido 2"] ;
}


?>
   


</body>
</html>