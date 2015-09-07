<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MonedaDAO
 *
 * @author Aprendiz Sena
 */
require_once '../com.entrenado_sergio.conexion/ConexionPHP.php';

class MonedaDAO extends AbstractDAO {

    public function __construct() {
        parent::__construct();
    }

    protected function eliminar($id) {
        try {
            $this->query = "DELETE FROM moneda where idMonedas ='$id';";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "El dispositivo fue eliminado";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function insertar($dto) {
        try {
            $this->query = "INSERT INTO monedas values ('" . $dto->getNombreMoneda() . "')";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "La moneda fue registrada correctamente";
            } else {
                return "La moneda no fue registrada";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function modificar($dto) {
        try {
            $this->query = "UPDATE moneda SET = ('" . $dto->getNombreMoneda() . "')";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "Se pudo actualizar la moneda";
            } else {
                return "No se pudo actualizar la moneda";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function odserbarATodos() {
        try {
            $this->lista = array();
            $this->query = "SELECT * FROM moneda";
            $this->resultado = $this->conexion->ejecutar($this->query);
            while ($res = mysqli_fetch_array($this->resultado)) {
                array_push($this->lista, new monedaDTO($res['nombreMoneda']));
            }
            return $this->lista;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function verUno($id) {
        try {
            $this->lista = array();
            $this->query = "SELECT * FROM moneda WHERE idMonedas = $id;";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if (mysqli_num_rows($this->resultado) > 0) {
                $res = mysql_fetch_array($this->resultado);
                $this->dto = new monedaDTO($res['nombreMoneda']);
            } else {
                return $this->dto;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();    
        }
    }

}
