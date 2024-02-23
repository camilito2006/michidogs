<?php
//Importamos las dependencias
require_once("../../Models/conexion_db.php");
require_once('../../Models/consultasAdmin.php');

//Captura en variables los datos enviados 
//Desde el formulario a través del método post y los name de los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $nombre.$apellido."123"; 
$rol = $_POST["rol"];
$estado = $_POST["estado"];
$fecha_creacion = date('y-m-d');

if($rol=='Administrador'){
    $rol=1;
}
else if ($rol=='Comprador'){
    $rol=2;
}
else if ($rol== 'Proveedor'){
    $rol= 3;
}

    echo "<script> alert('$contrasena') </script>";
    $contrasenaMD = md5($contrasena);
    $objConsultas = new ConsultaAdmin();
    $result = $objConsultas->registrarUsuario($apellido, $nombre, $email, $telefono, $contrasenaMD, $rol, $estado, $fecha_creacion);


?>