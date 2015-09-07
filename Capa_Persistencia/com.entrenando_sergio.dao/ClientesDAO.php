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
            if ($this->resultado) {
                return "la eliminacion del cliente fue un exito";
            } else {
                return "Tenemos un problema con la eliminación";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function insertar(ClienteDTO $dto) {
        try {
            $this->query = "INSERT INTO clientes VALUES ('" . $dto->getNombreCliente() . "','" . $dto->getApellidoCliente() . "','" . $dto->getTefefono() . "','" . $dto->getEmail() . ");";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "El clientes fue registrado exitosamente";
            } else {
                return "Tenemos un problema con el registro";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function modificar(ConexionPHP $dto) {
        try {
            $this->query = "UDPDATE clientes SET NombreCliente = ? ,ApellidoCliente = ?,tefefono = ?,email = ?;";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado) {
                return "El Cliente fue modificado exitosamente";
            } else {
                return"Tenemos un problema";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function odserbarATodos() {
        try {
            $this->lista = array();
            $this->query = "SELECT * FROM clientes;";
            $this->resultado = $this->conexion->ejecutar($this->query);
            while ($res = mysqli_fetch_array($this->resultado)) {
                array_push($this->lista, new ClienteDTO($res['NombreCliente'], $res['ApellidoCliente'], $res["tefefono"], $res['tefefono'], $res['email']));
            }
            return $this->lista;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function verUno($id) {
        try {
            $this->query = "SELECT * FROM clientes where idClientes = ?;";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if (mysqli_fetch_array($this->resultado) > 0) {
                $res = mysqli_fetch_array($this->resultado);
                $this->dto = new ClienteDTO($res['NombreCliente'],$res['ApellidoCliente'],$res['tefefono'],$res['email']);
            }
            return $this->dto;
        } catch (Exception $ex) {
            return $ex->getMessage();   
        }
    }

}
