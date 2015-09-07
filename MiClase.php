<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require './index.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Miclase {

            public function guardarNombre() {
                echo "Hola Sertgio Aqui estoy";
            }

            public function holaNombre() {
                echo "No pues otro metodo";
            }

        }

        $hola = new Miclase();
        $hola->guardarNombre();
        
              ?>
             

         <?php
          class MiOtraClasa{
             public $nombre;
             
             public function dicirAlgo(){
                 echo "Nombre: <br>" . $this->nombre;
             }
          }
          $MiOtra = new MiOtraClasa();
          $MiOtra->nombre = "Sergio";
          $MiOtra->dicirAlgo();
          $Otro = clone $MiOtra;
          $Otro->dicirAlgo();
          
          ?>
    </body>
</html>
