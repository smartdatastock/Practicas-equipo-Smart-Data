<?php
/**
 * Created by PhpStorm.
 * User: Juan Miguel
 * Date: 16/10/14
 * Time: 08:07 PM
 */
$usuario = new Usuario();
$titulo = "bienvenido a myusuario";
$contenido = "......";

$variables = array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());
view('myusuario',$variables);