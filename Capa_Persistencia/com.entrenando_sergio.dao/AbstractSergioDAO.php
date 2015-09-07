<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractDAO
 *
 * @author Sergio
 */
require_once '../com.entrenado_sergio.conexión/ConexiónPHP.php';

abstract class AbstractDAO {

    /**
     *
     * @var type 
     */
    protected $conexion = null; //Variable que tendra la instacia de la clase conecion para poder acceder a la base
    protected $lista = null; // varia que se utilizara como array en cada una de las clases que hereden esta clase
    protected $dto = null; // se utilizara como odjeto de tipo dto en cada una de las clases hijas que erende de esta clase padre
    protected $resultado = null; //Variable que tendra el resultado de la ejecucion del Query
    protected $query = null; // contendra el query al hacer la trasacion a la base

    /**
     * Traiendo e inicializando el metodo get_intance patron singleton
     */
    protected function __construct() {
        $this->conexion = ConexiónPHP::get_intance(); //Inicializando la variable con la instacia conexion
    }

    protected abstract function eliminar($id);

    protected abstract function insertar($dto);

    protected abstract function modificar($dto);

    protected abstract function odserbarATodos();

    protected abstract function verUno($id);
}
