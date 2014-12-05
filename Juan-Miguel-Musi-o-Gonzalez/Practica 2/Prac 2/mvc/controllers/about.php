<?php
/**
 * Created by PhpStorm.
 * User: Juan Miguel
 * Date: 13/10/14
 * Time: 07:48 PM
 */
$titulo = 'bienvenido al about';
$contenido = '........ contenido ............';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido,);

view('about', $variables);