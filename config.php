<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amors";

$conexion=mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($conexion,$dbname );

 $mysqli=new mysqli($servername,$username,$password,$dbname); 




?>