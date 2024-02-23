<?php
 class Conexion{
    public function get_conexion(){
        $user ="root";
        $pass="";
        $host="localhost";
        $dbname="michidogs";

        $conexion = new PDO("mysql: host=$host; dbname=$dbname;",$user,$pass);
     
        return $conexion;
    }
 }
?>