<?php
    require_once("../../Models/conexion_db.php");
    require_once("../../Models/consultasAdmin.php");
    require_once("../../Models/consultasUsuario.php");

$nombre = $_POST['nombreProducto'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];
$stock = $_POST['stock'];
$peso = $_POST['peso'];
$disponibilidad = $_POST['disponibilidad'];
$tipoMascota = $_POST['tipoMascota'];
$categoria = $_POST['categoria'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];
$usuario = $_SESSION['id'];
echo "<script>alert(".$usuario.")</script>";

$objConsultas = new ConsultaAdmin();

$result = $objConsultas->registrarProducto($nombre,$marca,$precio,$fecha,$stock,$peso,$disponibilidad,$tipoMascota,$categoria,$imagen,$descripcion,$usuario);

?>