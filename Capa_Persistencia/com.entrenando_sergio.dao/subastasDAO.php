<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subastas
 *
 * @author Aprendiz Sena
 */
require_once '../com.entrenado_sergio.conexion/ConexionPHP.php';

class subastas extends AbstractDAO {

    protected function eliminar($id) {
        try {
            $this->query = "DELETE FROM subastas WHERE idSubasta = '$id'";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "La eliminación se a echo con exito";
            } else {
                return "Lamentable mente no se pudo hacer la eliminacion de la subasta";
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function insertar(subastasDTO $dto) {
        try {
            $this->query = "INSERT INTO subastas VALUES = ('" . $dto->getValorOfrecido() . "');";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "La insercion se dio perfectamente se considio perfecto";
            } else {
                return "Lamentablemente no se pudo insertar la subasta";
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function modificar(subastasDTO $dto) {
        try {
            $this->query = "UPDATE moneda SET ValorOfrecido = '" . $dto->getValorOfrecido() . "WHERE idSubasta = '" . $dto->getIdSubastas() . "'";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "Se pudo modificar la subasta";
            } else {
                return "No se pudo modificar la subasta";
            }
        } catch (Exception $ex) {
         $ex->getMessage();    
        }
    }

    protected function odserbarATodos() {
        
    }

    protected function verUno($id) {
        
    }

}
