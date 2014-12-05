<?php
require ('Grupo.php');
require('header.php');
require ('bd.php');
$Grupo = new Grupo();
$Grupo->AsignarAlumnoaGrupo();
echo "<div><p>";

echo "</p></div>";
require('footer.php');



?>