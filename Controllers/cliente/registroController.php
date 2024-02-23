<?php
//Importamos las dependencias
require_once("../../Models/conexion_db.php");
require_once('../../Models/consultasUsuario.php');

//Captura en variables los datos enviados 
//Desde el formulario a través del método post y los name de los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$confirmarContrasena = $_POST['confirmarContrasena'];
$rol = $_POST["rol"];
$estado = "Activo";
$fecha_creacion = date('y-m-d');

if($rol=='comprador'){
    $rol=2;
}
else{
    $rol=3;
}

if ($contrasena == $confirmarContrasena) {
    $contrasenaMD = md5($contrasena);
    //Creamos el objeto apartir de la clase consulta para enviar los datos a una funcion especifico
    $objConsultas = new ConsultaUsuario();
    $result = $objConsultas->registrarUsuario($apellido, $nombre, $email, $telefono, $contrasenaMD, $rol, $estado, $fecha_creacion);
} else {
    echo '<script> alert("Las contraseñas no coinciden")</script>';
    echo "<script> location.href='../../Views/usuarios/registro.html'</script> ";
}
?>