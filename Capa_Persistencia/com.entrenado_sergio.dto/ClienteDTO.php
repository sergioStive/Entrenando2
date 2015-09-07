<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDTO
 *
 * @author Sergio
 */
class ClienteDTO {

    private $idClientes = 0;
    private $NombreCliente = "";
    private $ApellidoCliente = "";
    private $tefefono = "";
    private $email = "";

    /**
     * 
     * @param type $idClientes
     * @param type $NombreCliente
     * @param type $ApellidoCliente
     * @param type $tefefono
     * @param type $email
     * @throws Exception
     */
    public function __construct($idClientes, $NombreCliente, $ApellidoCliente, $tefefono, $email) {
        if (is_numeric($idClientes)) {
            $this->idClientes = $idClientes;
            $this->NombreCliente = $NombreCliente;
            $this->ApellidoCliente = $ApellidoCliente;
            $this->tefefono = $tefefono;
            $this->email = $email;
        } else {
            throw new Exception("El id Clientes no es valido");
        }
    }
    function getIdClientes() {
        return $this->idClientes;
    }

    function getNombreCliente() {
        return $this->NombreCliente;
    }

    function getApellidoCliente() {
        return $this->ApellidoCliente;
    }

    function getTefefono() {
        return $this->tefefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdClientes($idClientes) {
        if (is_numeric($idClientes)){
            $this->idClientes = $idClientes;
        }  else {
            throw new Exception("Este id no es el correcto");
        }
    }

    function setNombreCliente($NombreCliente) {
        $this->NombreCliente = $NombreCliente;
    }

    function setApellidoCliente($ApellidoCliente) {
        $this->ApellidoCliente = $ApellidoCliente;
    }

    function setTefefono($tefefono) {
        $this->tefefono = $tefefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
