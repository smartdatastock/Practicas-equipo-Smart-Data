<?php
/**
 * Created by PhpStorm.
 * User: Juan Miguel
 * Date: 13/10/14
 * Time: 07:03 PM
 */
function view($plantilla,$variables=array()){
    extract ($variables);
    require('views/'.$plantilla.'.tpl.php');
}

function controller ($nombre){
    if (empty($nombre))
        $nombre='home';

    $archivo = "controllers/$nombre.php";

    if (file_exists($archivo))
        require($archivo);
        else
            echo "error archivo no encontrado";
}