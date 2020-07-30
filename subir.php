<?php
session_start();
			if (isset($_REQUEST['logout'])) {
				session_destroy(); 

				header("Location: index.php"); }
if ($_SESSION['tipo_usuario'] == 1) {

	/*include("config.php");
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	*/
//tomo el valor de un elemento de tipo texto del formulario
if (isset($_FILES['imagen'])) {
$path="img/";
//datos del arhivo
$nombre_archivo = $_FILES['imagen']['name'];
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size'];

$descripcion=$_POST['descripcion'];
$categoria = $_POST['categoria'];
$etiquetas = $_POST['etiquetas'];

$etiquetas2 = str_replace(',', ' ', $etiquetas); 
$etiquetas2 = str_replace('.', ' ', $etiquetas2); 
$etiquetas2 = str_replace('  ', ' ', $etiquetas2); 
$etiquetas2 = str_replace('   ', ' ', $etiquetas2); 

	$mysqli = new mysqli("fdb24.awardspace.net","3463323_pam","Muajaja321","3463323_pam");
		$query = "INSERT INTO imagen (nombre, etiquetas, descripcion, categoria) 
		VALUES ('".$nombre_archivo."', '".$etiquetas2."', '".$descripcion."', '".$categoria ."')";
			 if ($mysqli->query($query) === TRUE) {
			 	echo "<script> alert('completado!!'); </script>";
	} 
/*
	echo $etiquetas2 . "<br>"; 
	echo $descripcion . "<br>"; 
	echo $tamano_archivo . "<br>"; 
	echo $nombre_archivo . "<br>"; 
	echo $categoria . "<br>"; 
*/

//compruebo si las características del archivo son las que deseo
/*
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
	*/
if (copy($_FILES['imagen']['tmp_name'],$path . $_FILES['imagen']['name'])) {

    }


}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" href="subir.css">

	<title>Subir na historia Piciosa</title>
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<h1>Los P i c i o s o s</h1>
				<p>Subir Historia</p>
			</div>
			<h1>Bienbenido <?php echo $_SESSION['nombre_usuario']; ?></h1>
			<h1><a href="subir.php?logout">Cerrar Session</a></h1>

			<div class="form2">
			  <form action="" method="POST" enctype="multipart/form-data" id="formulario">
			 <table>
			 	<tr><td>
			 		<input type="text" name="etiquetas" value ="" id="etiquetas" onkeypress="validar()">
			 		<td><label>Etiquetas separadas por una coma</label></td>
			 	</td></tr>
			 	<tr><td>
			 	<select name="categoria" required>    
				<option value="intradia">Intradia</option>    
				<option value="saliendo">Saliendo</option>    
				<option value="ajale!!">Ajale</option></select> 
				
			 	</td><td><label>Tipo de Categoria</label></td>
			 </tr>
			 	<tr><td>
			 		<textarea id="descripcion" name="descripcion" onkeypress="validar()"></textarea><br>
			 		<td><label>Descripcion de la foto</label></td>
			 	</td></tr>
			 	<tr><td>
			 		<input type="file" name="imagen" id="archivo" class="custom-file-input">
			 	</td></tr>   
			 	<tr><td>
			 		<input type="submit" value="Subir" id="subir" hidden="TRUE">
			 	</td></tr>
				
   			  </table>
  			 </form>
  			</div>
  				<div class="categorias" id="categorias">
					<a href="#" class="activo">Subir</a>
					<a href="#">Editar</a>
					<a href="#">Usuarios</a>
					<a href="index.php">Principal</a>
				</div>
		</header>
	</div>
	<script type="text/javascript" src="asd.js"></script>
</body>
</html>
<?php
} else  {	
echo '<script> alert("Solo administradores!!"); </script>'; 
	header("location: login.php");

}

 ?>