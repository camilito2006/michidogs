<?php
class ConsultaAdmin{
    public function registrarUsuario($apellido, $nombre, $email, $telefono, $contrasenaMD, $rol, $estado, $fecha_creacion){
        $objConexion = new Conexion();
        $conexion =  $objConexion->get_conexion();

        $insert = "INSERT INTO usuarios (rol_id,usu_apellido,usu_contrasena,usu_correo,usu_nombre,usu_telefono,usu_estado,usu_fecha_creacion)
                    VALUES  (:rol,:apellido,:contrasena,:email,:nombre,:telefono,:estado,:fecha_creacion)";

        $result = $conexion->prepare($insert);

        $result->bindParam(":rol", $rol);
        $result->bindParam(":apellido", $apellido);
        $result->bindParam(":contrasena", $contrasenaMD);
        $result->bindParam(":email", $email);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":telefono", $telefono);
        $result->bindParam(":estado", $estado);
        $result->bindParam(":fecha_creacion", $fecha_creacion);

        $result->execute();
        echo "<script> location.href='../../Views/Administrador/registrarUser.php'</script> ";
        echo "<script>alert ('Usuario Registrado') </script>";
    }
    public function consultarUsuarios(){
        $f=[];

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $select = "SELECT * FROM usuarios";
        $result = $conexion->prepare($select);
        $result->execute();
        $f=$result->fetchAll();
        return $f;
    }
    public function eliminarUsers($id){

        $objconexion =new Conexion();

        $conexion = $objconexion->get_conexion();

        $eliminar = "DELETE FROM usuarios WHERE id=:id";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id", $id);

        $result->execute();
        echo "<script> alert('El usuario ha sido eliminado exitosamente') </script>";
        echo "<script> location.href='../../Views/Administrador/verUsers.php'</script> ";
      
    }

    public function cargarUsuario($id){
        $f = null;

        $objconexion =new Conexion();

        $conexion = $objconexion->get_conexion();

        $consultar = "SELECT * FROM usuarios WHERE id =:id";

        $result = $conexion->prepare($consultar);

        $result-> bindParam(':id', $id);

        $result->execute();

        //Siempre al hacer una consulta para mostrar informacion necesitamos convertir 
        //el resultado en un arreglo para poder segmentar dato por dato

        while($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }
    public function editarUsuario($apellido, $nombre, $email, $telefono, $rol, $estado,$id){
        $objconexion = new Conexion();
        $conexion = $objconexion->get_conexion();
        $actualizar = "UPDATE usuarios SET usu_nombre=:nombre,usu_apellido=:apellido,usu_telefono=:telefono,usu_correo=:email,rol_id=:rol,usu_estado=:estado WHERE id=:id";
        $result = $conexion -> prepare ($actualizar);

        $result->bindParam(":id",$id);
        $result->bindParam (":nombre", $nombre);
        $result->bindParam (":apellido", $apellido);
        $result->bindParam (":email", $email);
        $result->bindParam (":telefono", $telefono);
        $result->bindParam (":rol", $rol);
        $result->bindParam (":estado", $estado);

        $result->execute();
        echo "<script> location.href='../../Views/Administrador/verUsers.php'</script> ";
        echo "<script> alert('El usuario ha sido actualizado exitosamente') </script>";
    }
    public function registrarProducto($nombre,$marca,$precio,$fecha,$stock,$peso,$disponibilidad,$tipoMascota,$categoria,$imagen,$descripcion,$usuario){
        $objconexion = new Conexion ();
        $conexion = $objconexion->get_conexion();
        $insert = "INSERT INTO productos (pro_proveedor,pro_nombre,pro_marca,pro_precio,pro_vencimiento,pro_stock,pro_peso,pro_dispo,pro_categoria,pro_tipoMascota,pro_img,pro_descrip)
         VALUES(:usuario,:nombre,:marca,:precio,:fecha,:stock,:peso,:disponibilidad,:categoria,:tipoMascota,:imagen,:descripcion)";

        $result = $conexion->prepare($insert); 

        $result->bindParam(":usuario",$usuario);
        $result->bindParam(":nombre",$nombre);
        $result->bindParam(":marca",$precio);
        $result->bindParam(":precio",$precio);
        $result->bindParam(":fecha",$fecha);
        $result->bindParam(":stock",$stock);
        $result->bindParam(":peso",$peso);
        $result->bindParam(":disponibilidad",$disponibilidad);
        $result->bindParam(":categoria",$categoria);
        $result->bindParam(":tipoMascota",$tipoMascota);
        $result->bindParam(":imagen",$imagen);
        $result->bindParam(":descripcion",$descripcion);
        $result->execute();

        echo "<script> alert('El producto ha sido registrado exitosamente') </script>";
    
    
    
    }
}


?>
