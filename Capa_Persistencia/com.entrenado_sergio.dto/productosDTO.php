<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productosDTO
 *
 * @author Sergio
 */
class productosDTO {

    private $idProductos = 0;
    private $NombreProducto = "";
    private $ValorInicial = 0.0;

    /**
     * 
     * @param type $idProductos
     * @param type $NombreProducto
     * @param type $ValorInicial
     * @throws Exception
     */
    public function __construct($idProductos, $NombreProducto, $ValorInicial) {
        if (is_numeric($idProductos)) {
            $this->idProductos = $idProductos;
            $this->NombreProducto = $NombreProducto;
            $this->ValorInicial = $ValorInicial;
        } else {
            throw new Exception("El idProdctos no es el correcto");
        }
    }
    function getIdProductos() {
        return $this->idProductos;
    }

    function getNombreProducto() {
        return $this->NombreProducto;
    }

    function getValorInicial() {
        return $this->ValorInicial;
    }

    /**
     * 
     * @param type $idProductos
     * @throws Exception
     */
    function setIdProductos($idProductos) {
        if (is_numeric($idProductos)){
            $this->idProductos = $idProductos;
        }  else {
            throw new Exception("Tenemos un problema con idProductos");
        }
    }

    function setNombreProducto($NombreProducto) {
        $this->NombreProducto = $NombreProducto;
    }

    function setValorInicial($ValorInicial) {
        $this->ValorInicial = $ValorInicial;
    }


}
