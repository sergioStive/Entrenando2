<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RolUsuarioDAO
 *
 * @author APRENDIZ_SENA
 */

require_once '../com.entrenando_sergio.dao/AbstractSergioDAO.php';
class RolUsuarioDAO extends AbstractDAO {
    
    public function __construct() {
        parent::__construct();
    }

    protected function eliminar($id) {
        try {
            $this->query = "DELETE FROM Roles WHERE id_Rol = $id;";
            $this->resultado = $this->resultado->ejecutar($this->query);
            if ($this->resultado) {
                return "Este rol fue eliminado exitosamente";
            }  else {
                return "Hay un problema no se puede eleminar este rol";    
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function insertar($dto) {
        try {
                $this->query = "INSERT INTO roles (NombreRol) VALUES ('". $dto->getNombreRol() ."');";
                $this->resultado = $this->conexion->ejecutar($this->query);
                if ($this->resultado) {
                    return "El rol fue fue registrado";
                }  else {
                    return "No se pudo registrar el rol";    
                }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function modificar($dto) {
        try {
            $this->query = "UPDATE roles SET NombreRol = '". $dto->getNombreRol()."' WHERE id_Rol = ". $dto->getId_Rol() .";";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if ($this->resultado){
                return "La ctualizaciíon se a echo exitosamente";
            }  else {
                return "lamentablemente no se pudo hacer la actulización";    
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function odserbarATodos() {
        try {
            $this->lista = array();
            $this->query = "SELECT * FROM roles";
            while ($res = mysqli_affected_array($this->resultado)){
                array_push($this->lista, new RolesDTO($res['idRol'],$res['NombreRol']));
            }
            return $this->lista;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    protected function verUno($id) {
        try {
            $this->query = "SELECT * FROM roles WHERE id_Rol = $id";
            $this->resultado = $this->conexion->ejecutar($this->query);
            if (mysql_affected_rows($this->resultado) > 0){
                $res = mysqli_affected_rows($this->resultado);
                $this->dto = new RolesDTO($res['idRol'],$res['NombreRol']);
            }
            return $this->lista;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

//put your code here
}
