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
}