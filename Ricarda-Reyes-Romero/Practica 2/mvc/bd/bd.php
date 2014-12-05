<?php
/**
 * Created by PhpStorm.
 * User: Juan Miguel
 * Date: 16/10/14
 * Time: 08:27 PM
 */
$db_name = "control";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_connection = mysql_connect($db_server, $db_user, $db_pass)or die("Error al conectar la BD");
mysql_select_db($db_name, $db_connection)or die("La BD no existe");
mysql_query("SET NAMES utf8");