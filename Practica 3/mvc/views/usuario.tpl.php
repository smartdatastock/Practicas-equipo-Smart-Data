<?php
    $usuario = new Usuario();
?>
<html>
    <head>

    </head>
    <body>
    <h1> <?=$titulo ?> </h1>
    <p> <?=$contenido ?> </p>
    <p> <?=$nombre ?> </p>
    <?php
        $usuario->setUsuario();
        $usuario->getUsusaio();
        $usuario->consultaGeneral()
    ?>

    </body>
</html>


