<?php 

class ControladorUsuarios{



    /*=============================================
    INGRESO DE USUARIOS 
    =============================================*/

    static public function ctrIngresoUsuario(){



        if(isset($_POST["ingUsuario"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios"; 
                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                // Evitar el error verificando si $respuesta es false
                if ($respuesta !== false && isset($respuesta["usuario"])) {
                    if ($respuesta["usuario"] == $_POST["ingUsuario"] &&
                        $respuesta["password"] == $_POST["ingPassword"]) {

                        $_SESSION["iniciarSesion"] = "ok";

                        echo '<script> window.location="inicio"; </script>';
                    } else {
                        echo '<br><div class="alert alert-danger">Error de ingreso, ¡Vuelve a intentarlo!</div>';
                    }
                } else {
                    echo '<br><div class="alert alert-danger">Usuario no encontrado.</div>';
                }
            }
        }
    }


    /*=============================================
    CREAR USUARIO
    =============================================*/


    static public function ctrCrearUsuario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 

            if (!empty($_POST["nuevoUsuario"]) && 
                !empty($_POST["nuevoNombre"]) && 
                !empty($_POST["nuevoPassword"])) {

                if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) {
                    
                    echo '<script>alert("dentro del if");</script>';

                } else {
                   
                    echo '<script>alert("Formato incorrecto en los campos!:C");</script>';

                }

            }    
         
         }   
    }


}