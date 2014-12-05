<?php
/**
 * Created by PhpStorm.
 * User: MAQ11-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:23 PM
 */

require ('Maestro.php');
$Maestro = new Maestro();
$Maestro->InsertarDatos();
$Maestro->ConsultarDatos();
$Maestro->ConsultaGenral();
$Maestro->DeleteReg();
$Maestro->UpdateDatos();


?>