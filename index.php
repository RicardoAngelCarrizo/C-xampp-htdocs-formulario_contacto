<?php 
    $errores = '';
    $enviado = '';

    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        if(!empty($nombre)){
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            if($nombre == ""){
                $errores .= 'Por favor ingresa un nombre <br />';
            }
        }else{
            $errores .= 'Por favor ingresa un nombre <br />';
        }

        if(!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= "Ingresa un correo válido <br />";
            }

            

        }else{
            $errores .= "Por favor ingresa tu email <br/>";
        }

        if(!empty($mensaje)){
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);

            if($mensaje == ""){
                $errores .= "Aún no escribiste tu consulta";
            }

        }else{
            $errores .= "Aún no escribiste tu consulta";
        }

        if(!$errores){
            $enviar_a = "ricardoang35@gmail.com";
            $asunto = "Correo enviado desde mipagina.com";
            $mensaje_preparado = "De: $nombre\n";
            $mensaje_preparado = "Correo: $correo\n";
            $mensaje_preparado = "Mensaje: " . $mensaje;

           # mail($enviar_a, $asunto, $mensaje_preparado);

            $enviado = true;
        }
    }
    require 'index.view.php';
?>