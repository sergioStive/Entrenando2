<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of monedaDTO
 *
 * @author Sergio
 */
class monedaDTO {

    private $idMonedas = 0;
    private $nombreMoneda = "";

    /**
     * 
     * @param type $idMonedas
     * @param type $nombreMonedas
     * @throws Exception
     */
    public function __construct($idMonedas, $nombreMonedas) {
        if (is_numeric($idMonedas)) {
            $this->idMonedas = $idMonedas;
            $this->nombreMoneda = $nombreMonedas;
        } else {
            throw new Exception("El idMonedas no es el que deberia ser");
        }
    }

    function getIdMonedas() {
        return $this->idMonedas;
    }

    function getNombreMoneda() {
        return $this->nombreMoneda;
    }

    /**
     * 
     * @param type $idMonedas
     * @throws Exception
     */
    function setIdMonedas($idMonedas) {
        if (is_numeric($idMonedas)) {
            $this->idMonedas = $idMonedas;
        } else {
            throw new Exception("El id moneda no es valido");
        }
    }

    function setNombreMoneda($nombreMoneda) {
        $this->nombreMoneda = $nombreMoneda;
    }

}
