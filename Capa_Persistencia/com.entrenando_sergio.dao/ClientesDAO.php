<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientesDAO
 *
 * @author Sergio
 */
require_once '../com.entrenando_sergio.dao/AbstractSergioDAO.php';

class ClientesDAO extends AbstractDAO {

    public function __construct() {
        parent::__construct();
    }

    protected function eliminar($id) {
        try {
            $this->query = "DELETE FROM clientes where idClientes = '$id';";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado){
                return "la eliminacion del cliente fue un exito";
            }  else {
                return "Tenemos un problema con la eliminación";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }    
    }

    protected function insertar($dto) {
        try {
            $this->query = "INSERT INTO clientes VALUES ";    
        } catch (Exception $ex) {
            
        }   
    }

    protected function modificar($dto) {
        
    }

    protected function odserbarATodos() {
        
    }

    protected function verUno($id) {
        
    }

}
