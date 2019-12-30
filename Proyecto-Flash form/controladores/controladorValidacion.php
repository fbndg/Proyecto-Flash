<?php
    function validarFormulario() {
        $errores = [];
        // Validamos el input de Nombre:
        if(isset($_POST['nombre'])) {
            if(empty($_POST['nombre'])) {
                $errores['nombre'][] = "Este campo es obligatorio.";
            }
            if(strlen($_POST['nombre']) < 2) {
                $errores['nombre'][] = "Tu nombre debe tener por lo menos 2 letras.";
            }
        }
        // Validamos el input Email:
        if(isset($_POST['email'])) {
            if(empty($_POST['email'])) {
                $errores['email'][] = "Este campo es obligatorio.";
            }
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errores['email'][] = "Deberás insertar un email válido.";
            }
        }
        // Validamos el input Password:
        if(isset($_POST['password'])) {
            if(empty($_POST['password'])) {
                $errores['password'][] = "Este campo es obligatorio.";
            }
            if(strlen($_POST['password']) < 6) {
                $errores['password'][] = "La longitud de la contraseña debe ser superior a 6.";
            }
        }
        // Validamos el input Repassword:
        if(isset($_POST['repassword'])) {
            if(empty($_POST['repassword'])) {
                $errores['repassword'][] = "Este campo es obligatorio.";
            }
            if($_POST['password'] != $_POST['repassword']) {
            $errores['repassword'] = "Las contraseñas debe coincidir.";
            }
        }
        return $errores;
    }
    function persistirDato($dato, $arrayDeErrores) {
        if(isset($arrayDeErrores[$dato])) {
            return "";
        } else {
            if(isset($_POST[$dato])) {
                return $_POST[$dato];
            }
        }
    }
?>