<?php

require('templete/header.php');
require('templete/menu.php');
require 'helpers.php';
require('bd/bd.php');

require 'clases/usuario.php';

if (empty($_GET['url']))
$_GET['url']='home';

controller($_GET['url']);

require('templete/footer.php');


/**
 * contador=1;i
 * while (contador<=10)
 * obtener el numero aleatorio
 * if (pregunta[id]!=1){
 * pregunta[id]=1;
 * imprime pregunta
 * contador++
 * }
 * else{}
 */