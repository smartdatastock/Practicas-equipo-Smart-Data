<?php
require ('bd.php');
require ('header2.php');

require ('Materia.php');
$materia = new Materia();
$id=$_COOKIE['Id'];
$materia->materiasAsignadas2($id);
require ('footer.php');
?>