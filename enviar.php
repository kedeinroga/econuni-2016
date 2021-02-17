<?php 
$destino="informes.econ@gmail.com";
$email = $_POST["email"];
$contenido = "email:" . $email;
mail($destino,"contacto"$contenido);
header("e-con.php");
 ?>