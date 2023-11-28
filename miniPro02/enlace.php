<?php 
include "conexion.php";

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$photo = $_POST ['photo'];
$name = $_POST ['name'];
$bio = $_POST ['bio'];
$phone = $_POST ['phone'];

$sql = "INSERT INTO usuarios (`email`, `contraseña`, `photo`, `name`, `bio`, `phone`) VALUES (?, ?, ?, ?, ?, ?,)";

if (mysqli_query($conectar,$sql)){
    echo "Conexion satisfactoria";
}else{
    echo"Error en la conexion" . mysqli_error($conectar);
}

mysqli_close($conectar);

?>

