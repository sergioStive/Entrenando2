<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productosDAO
 *
 * @author Aprendiz Sena
 */
require_once '../com.entrenado_sergio.conexion/ConexionPHP.php';

class productosDAO extends AbstractDAO {

    protected function eliminar($id) {
        try {
            $this->query = "DELETE FROM productos WHERE idProductos = '$id'";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "La eliminacion del producto fue realizada con exito";
            } else {
                return "Lamentable mente no se pudo eliminar el producto";
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function insertar($dto) {
        try {
            $this->query = "INSER INTO productos VALUES ('" . $dto->getNombreProducto() . "','" . $dto->getValorInicial() . "')";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "La insertcion se a realizado con exito";
            } else {
                return "Lo sentimos la insertcion no se a podido realizar";
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function modificar(productosDTO $dto) {
        try {
            $this->query = "UPDATE productos SET NombreProducto ='" . $dto->getNombreProducto() . "',ValorInicial ='" . $dto->getValorInicial() . "WHERE idProductos = '" . $dto->getIdProductos() . "';";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "Si se pudo ejecutar la insertcion a productos";
            } else {
                return "Lamentablemete no se pudo insertar el producto";
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function odserbarATodos() {
        try {
            $this->lista = array();
            $this->query = "SELECT * FROM productos";
            $this->resultado = $this->conexion->ejecutar($this->query);
            while ($res = mysqli_fetch_array($this->resultado)) {
                array_push($this->lista, new productosDAO($res['NombreProducto'], $res['ValorInicial']));
            }
            return $this->lista;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    protected function verUno($id) {
        try {
            $this->query = "SELECT * FROM prodcutos WHERE idProductos = '$id';";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if (mysqli_num_rows($this->resultado) > 0) {
                $res = mysqli_fetch_array($this->resultado);
                $this->dto = new productosDTO($res['NombreProducto'], $res['ValorInicial']);
            }
            return $this->dto;
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

}
