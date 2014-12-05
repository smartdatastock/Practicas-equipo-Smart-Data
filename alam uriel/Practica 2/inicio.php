<?php
require ("menu.php");
require ("base/Bd.php");
require ("class/pregunta.php");
require ("header.php");

$pregunta=new pregunta();
$pregunta->mostrar_preguntas();