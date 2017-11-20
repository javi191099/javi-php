<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>calcular dni</title>
	<style>
input{
	margin-top:10px;
}
.button{
width: 100px;
height: 60px;
background-color: yellow;
}
.error {
	color: red;
   font-weight: bold;
}

h1 {
	color:purple; 
}
form{
	color:green;
}
input{
	background-color:blue;
}
text{
	color:pink;
}
	</style>
</head>
<body>
	<h1>CALCULO LETRA DNI</h1>
	<?php 
    $dni = "";
    $error = "";
    $letra="";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$dni=$_POST["dni"];
		if ($dni=="") {
			$error="esto esta vacio!!";
			
		} else{
			$arrayletras[0]="T";
            $arrayletras[1]="R";
            $arrayletras[2]="W";
            $arrayletras[3]="A";
            $arrayletras[4]="G";
            $arrayletras[5]="M";
            $arrayletras[6]="Y";
            $arrayletras[7]="F";
            $arrayletras[8]="P";
            $arrayletras[9]="D";
            $arrayletras[10]="X";
            $arrayletras[11]="B";
            $arrayletras[12]="N";
            $arrayletras[13]="J";
            $arrayletras[14]="Z";
            $arrayletras[15]="S";
            $arrayletras[16]="Q";
            $arrayletras[17]="V";
            $arrayletras[18]="H";
            $arrayletras[19]="L";
            $arrayletras[20]="C";
            $arrayletras[21]="K";
            $arrayletras[22]="E";
             
             $resto=$dni%23;
             $letra=$arrayletras[$resto];











		}
	}




	?>
	<form action="#" method="post">
		<p class="error"><?=$error;?></p>
	<div>
		<label for="">dni:</label>
		<input type="text" name="dni" value="<?=$dni?>">
	</div>

<div>
		<label for="">nif:</label>
		<input type="text" value="<?php echo$dni.$letra?>">
	</div>

<div>
	<input class="button" type="submit" > 
</div>














	</form>
















</body>
</html>