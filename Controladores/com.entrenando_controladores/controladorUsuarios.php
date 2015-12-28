<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controladorUsuarios
 *
 * @author APRENDIZ_SENA
 */
require_once '../../Capa_Persistencia/com.entrenando_sergio.dao/ClientesDAO.php';
require_once '../../Capa_Persistencia/com.entrenado_sergio.dto/ClienteDTO.php';
require_once '../../Capa_Persistencia/com.entrenando_sergio.dao/RolUsuarioDAO.php';
require_once '../../Capa_Persistencia/com.entrenado_sergio.dto/RolesDTO.php';

class controladorUsuarios {
    /**
     *
     * @var type Esta es uan variable para poder instanciar la Clase ClientesDAO
     */
    private $uDao = null; //Instancia de la Clase ClientesDAO
    
    /**
     *
     * @var type Variable que se utilizara como instacia de la clase ClientesDTO 
     */
    private $uDtO = null;
    
    /**
     *
     * @var type variable que se utilizara como instacia de la clase RolesDAO
     * 
     */
    private $rolDAO = null;
    
    /**
     *
     * @var type instacia de la clase RolesDTO
     */
    private $rolDTO = null;  
    /**
     *
     * @var type lista Array arreglo
     */
    
    private $lista = null; // Variable que se utilizara como array

    public function registrarCliente(){
        try {
            $this-> uDao = new ClientesDAO();
            $this->uDtO = $this->uDao->verUno();
        } catch (Exception $ex) {
            
        }
    }
   
}
