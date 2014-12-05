
<?php
require('./template/header.php');
require('./template/menu.php');
require('./bd/bd.php');
/**
 * Created by PhpStorm.
 * User: miguel garcia m
 * Date: 13/10/14
 * Time: 07:03 PM
 */
require 'helpers.php';
require './clases/quest.php';
if (empty($_GET['url']))
$_GET['url']='home';

controller($_GET['url']);

require('./template/footer.php');
?>