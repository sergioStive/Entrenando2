<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subastasDTO
 *
 * @author Sergio
 */
class subastasDTO {

    private $idSubastas = 0;
    private $idProductos = 0;
    private $idClientes = 0;
    private $idMonedas = 0;
    private $ValorOfrecido = 0.0;

    /**
     * 
     * @param type $idSubastas
     * @param type $idProductos
     * @param type $idClientes
     * @param type $idMonedas
     * @param type $ValorOfrecido
     * @throws Exception
     */
    public function __construct($idSubastas, $idProductos, $idClientes, $idMonedas, $ValorOfrecido) {
        if (is_numeric($idSubastas) & is_numeric($idProductos) & is_numeric($idClientes) & is_numeric($idMonedas)) {
            $this->idSubastas = $idSubastas;
            $this->idProductos = $idProductos;
            $this->idClientes = $idClientes;
            $this->idMonedas = $idMonedas;
            $this->ValorOfrecido = $ValorOfrecido;
        } else {
            throw new Exception("Alguno de estos datos no es valido");
        }
    }

    function getIdSubastas() {
        return $this->idSubastas;
    }

    function getIdProductos() {
        return $this->idProductos;
    }

    function getIdClientes() {
        return $this->idClientes;
    }

    function getIdMonedas() {
        return $this->idMonedas;
    }

    function getValorOfrecido() {
        return $this->ValorOfrecido;
    }

    function setIdSubastas($idSubastas) {
        if (is_numeric($idSubastas)) {
            $this->idSubastas = $idSubastas;
        } else {
            throw new Exception("Tenemos un prblema idSubastas no es el correcto");
        }
    }

    function setIdProductos($idProductos) {
        if (is_numeric($idProductos)) {
            $this->idProductos = $idProductos;
        } else {
            throw new Exception("Tenemos un problema idProductos no esta bién");
        }
    }

    function setIdClientes($idClientes) {
        if (is_numeric($idClientes)) {
            $this->idClientes = $idClientes;
        } else {
            throw new Exception("idClientes no es vaido");
        }
    }

    function setIdMonedas($idMonedas) {
        if (is_numeric($idMonedas)) {
            $this->idMonedas = $idMonedas;
        } else {
            throw new Exception("El idMonedas no es el correcto");
        }
    }

    function setValorOfrecido($ValorOfrecido) {
        $this->ValorOfrecido = $ValorOfrecido;
    }
}
