<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-Contacto</title>
    <link rel="stylesheet" href="estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:..." value=" <?php if(!$enviado && isset($nombre)) echo $nombre ?> ">

            <input type="text" class="form-control" name="correo" placeholder="Correo:..." value=" <?php if(!$enviado && isset($correo)) echo $correo ?>  ">

            <textarea name="mensaje" class="form-control" placeholder="Mensaje:...">  <?php if(!$enviado && isset($mensaje)) echo $mensaje ?> </textarea>

           <?php  if(!empty($errores)) :  ?>
                <div class="alert error" role="alert">
                    <?php echo $errores; ?>
                </div>

            <?php elseif($enviado) :  ?>
                <div class="alert success" role="alert">
                    <p>Enviado correctamente</p>
                </div>
                
           <?php  endif;  ?>
        

           

            <input type="submit" value="Enviar Correo" class="btn btn-primary" name="submit" >
        </form>
    </div>
</body>
</html>