<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido..HOLA</title>
        <link type="image/png" rel="shortcut icon" href="../Recursos/imagenes/favicon.png">
        <link type="text/css" rel="stylesheet" href="../Recursos/css/index.css">
        <script type="text/javascript" src="../Recursos/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../Recursos/js/jquery.validate.js"></script>
        <script type="text/javascript">
        $.validator.setDefaults({
            });
            $().ready(function () {
                
                $("#signupForm").validate({
                    rules: {
                        txtDocumento: {
                            required: true,
                            number: true,
                            minlength: 7
                        },
                        txtContra: {
                            required: true,
                            minlength: 5
                        }
                    },
                    messages: {
                        txtDocumento: {
                            required: "Ingrese el número de documento",
                            number: "El campo debe tener números",
                            minlength: "Mínimo 7 numeros"
                        },
                        txtContra: {
                            required: "Por favor ingrese la contraseña",
                            minlength: "Mínimo 5 caracteres"
                        }
                    }
                });
            });
        </script>
      </head>
    <body>
     <?php
     $usuarioDTO = null;
     $mensaje = "";
     if (isset($_REQUEST['botonBuscar'])) {
         
     }
     
     ?>
        <div class="contenedor">
            <div class="logo"></div>
            <form class="formLogin" id="signupForm" action="index.php" method="post">
                <h3>Inicio de sesión</h3>
                <div id="msjIncorrecto">
                    <?php if ($mensaje != "") { ?>
                        <label>
                            <?php
                            echo $mensaje;
                            ?>
                        </label>
                        <?php
                    }
                    ?>
                </div>
                <table>
                    <tr>
                        <td>
                            <label for="txtDocumento">Número de documento: </label>
                        </td>
                        <td>
                            <input type="text" name="txtDocumento" id="txtDocumento" maxlength="12">
                            <label class="astx"> * </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtContra">Contraseña: </label>
                        </td>
                        <td>
                            <input type="password" name="txtContra" id="txtContra" maxlength="12">
                            <label class="astx"> * </label>
                        </td>
                    </tr>
                </table>
                <input type="submit" id="btnIngresar" name="btnIngresar" value="Entrar">
            </form>
        </div>
    </body>
</html>
