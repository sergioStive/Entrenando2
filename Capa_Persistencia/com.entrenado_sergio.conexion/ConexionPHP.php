<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexiónPHP
 *
 * @author Sergio
 */
class ConexionPHP {

    private $host = "localhost"; // Este es el servidor donde se encuentra la base de datos
    private $user = "subastas_admin"; //Usuario de base de datos
    private $password = "12345"; //Contraseña de la base de datos
    private $namedb = "subastas"; //Nombre de la base de datos
    private $link = null; //variable que contiene la conexion
    private $stmt = null; //Variable que contiene el resultado de la ejecucion del query
    private static $_instancia = null; //Es la instacia de la conexion

    private function __construct() {
        $this->ConectarDB();
    }

    private function __clone() {
        
    }

    /*
     * Ete es el meto de conexion a la base de datos
     */

    private function ConectarDB() {
        $this->link = mysqli_connect($this->host, $this->user, $this->password) or die("No se puede conectar a la base" . mysql_error());
        mysqli_select_db($this->link, $this->namedb) or die("No exite dicha base de datos" . mysql_errno());
    }

    /**
     * 
     * @return type
     */
    public static function get_intance() {
        if (!self::$_instancia instanceof self) {
            self::$_instancia = new self();
        } else {
            return self::$_instancia;
        }
    }
    /**
     * 
     * @param String $query
     * @return stmtm en esta variable se guarda lo iodtenido en la ejecucion d la consulta
     */
    public function ejecutar($query){
        $this->stmt = mysqli_query($this->link, $query) or die("Tenemos un Problema con el query $query" . mysqli_error());
        return $this->stmt;
    }
}
