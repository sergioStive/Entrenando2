<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RolesDTO
 *
 * @author APRENDIZ_SENA
 */
class RolesDTO {
    private $id_Rol = 0;
    private $NombreRol = "";
    
    public function __construct($idRol, $NombreRol) {
        if (is_numeric($idRol)) {
            $this->id_Rol = $idRol;
            $this->NombreRol = $NombreRol;
        }  else {
            throw new Exception("Este id no es el correcto");
        }
        ;
    }
    function getId_Rol() {
        return $this->id_Rol;
    }

    function getNombreRol() {
        return $this->NombreRol;
    }

    function setId_Rol($id_Rol) {
        if (is_numeric($id_Rol)){
        $this->id_Rol = $id_Rol;    
        }  else {
            throw new Exception("Este id no es valido");
        }
    }

    function setNombreRol($NombreRol) {
        $this->NombreRol = $NombreRol;
    }


}
