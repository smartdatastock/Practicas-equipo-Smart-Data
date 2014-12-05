<?php
$usuario = new Usuario();

$titulo= 'Bienvenidos al Inicio';
$contenido = 'Contenido de la variables ...';
$variables = array ('titulo'=>$titulo, 'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());

view('myusuario', $variables);
?>