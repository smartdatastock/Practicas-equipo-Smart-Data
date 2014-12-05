<?php
require ('Grupo.php');
require('header.php');
require ('bd.php');
$Grup = new Grupo();
if($_SERVER['REQUEST_METHOD'] == POST){
    $idalu = $_POST[user1];
    $idgrup = $_POST[user2];
    $count = count($idalu);
    for($i = 0; $i < $count; $i++){
        $idalumno = $idalu[$i];
        $Grup->InsertVal($idalumno,$idgrup);
    }
}
$sql01="SELECT asignagrupos.`idgrupos`, personascontrol.`nombre`,grupos.`nombre` AS grupo
FROM asignagrupos,personascontrol,grupos
WHERE asignagrupos.`idalumno` = personascontrol.`IdPersona`
AND asignagrupos.`idgrupo` = grupos.`idgrupo`
AND asignagrupos.`idgrupo` = $idgrup";
$consulta = mysql_query($sql01) or die ("error 1 de consulta a materia");
$cuantos3=mysql_num_rows($consulta);
echo "<div class=table-resposive align=center>";
echo "<table class=\*table table-striped\ border=1>";
echo "<tr><td colspan=2 align=center>Alumnos Asignados</td></tr>";
echo"<tr><td>Alumnos</td><td>Eliminar Alumno</td></tr>";
for ($y=0; $y<$cuantos3; $y++)
{
    $id = mysql_result($consulta, $y, 'idgrupos');
    $nom =mysql_result($consulta, $y, 'nombre');
    $grup =mysql_result($consulta, $y, 'grupo');
    echo "<tr><td>$nom</td><td><form name=eliminar action=TestGrupo.php method=Post><input type=hidden name=id value=$id /><input type=submit name=submit value=Eliminar /></form></td></tr>";
}
echo "<tr><td colspan=2 align=center>Alumnos agregados al grupo: $grup </td></tr>";
echo "</table>";
echo "</div>";
require('footer.php');

?>