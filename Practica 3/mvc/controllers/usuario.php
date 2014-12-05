<?php
$usuario = new usuario();
$titulo = "M&G IT SYSTEMSa";
$contenido = " N. S. N. ";

$variables = array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

view('usuario',$variables);