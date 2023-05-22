<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
abstract class Conexion{
    public static $conexion = null;
    private static function conectar(){
        try{
            //CONEXION A LA BD DE INFORMIX EN DOCKER 
            self::$conexion = new PDO('informix:host=host.docker.internal; service=9088; database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix'); 
            // DEFINIR EL MANEJO DE EXCEPCIONES
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "CONECTADO";
        }catch(PDOException $e){
            // IMPRIME EN PANTALLA EL ERROR
            echo "Error de conexion de BD";
            echo "<br>";
            echo $e->getMessage();
            exit;
        }
        return self::$conexion;
    }
}