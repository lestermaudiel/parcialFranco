<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'Conexion.php';

class Cursos extends Conexion{
    public $curso_id;
    public $curso_nombre;
    public $curso_periodos;
    public $curso_fase;
    public $curso_instructor;
    public $curso_creditos;

    public function __construct($args = [] )
    {
        $this->curso_id = $args['id'] ?? null;
        $this->curso_nombre = $args['curso_nombre'] ?? '';
        $this->curso_periodos = $args['curso_periodos'] ?? '';
        $this->curso_fase = $args['curso_fase'] ?? '';
        $this->curso_instructor = $args['curso_instructor'] ?? '';
        $this->curso_creditos = $args['curso_creditos'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO cursos(curso_nombre, curso_periodos, curso_fase, curso_instructor, curso_creditos) values('$this->curso_nombre','$this->curso_periodos','$this->curso_fase','$this->curso_instructor','$this->curso_creditos')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}