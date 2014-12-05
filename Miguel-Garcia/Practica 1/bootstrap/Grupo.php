<?php
/**
 * Created by PhpStorm.
 * User: Josue
 * Date: 19/09/14
 * Time: 06:39 PM
 */

class Grupo {
    private $id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;

    public function InsertVal($idalu,$idgrup){
            $insert01 = "INSERT INTO asignagrupos(idalumno,idgrupo) VALUES ($idalu,$idgrup)";
            $execute = mysql_query($insert01) or die ("Error al insertar");
        }

    public function BuscarEspecif(){
        echo "<br>entro a metodo busqueda especifica de grupo";
    }

    public function BuscarGenerl(){
        echo "<br>entro a metodo busqueda general de grupo";
    }

    public function DeleteReg(){
        echo "<br>entro a metodo eliminar registro de grupo";
    }

    public function Modificar(){
        echo "<br>entro a metodo modificar de grupo";
    }
    public function AsignarAlumnoaGrupo(){
        $sql01="SELECT * FROM personascontrol WHERE nivel=3 AND estatus = 1  ORDER BY IdPersona ASC";
        $consulta = mysql_query($sql01) or die ("error 1");
        $cuantos3=mysql_num_rows($consulta);
        echo "<div class=table-resposive>";
        echo "<form name=materias action=asignar-alumnos.php method=Post>";
        for ($y=0; $y<$cuantos3; $y++)
        {
            $id=mysql_result($consulta, $y, 'IdPersona');
            $nom=mysql_result($consulta, $y, 'nombre');
            $apat =mysql_result($consulta, $y, 'Apat');
            $amat=mysql_result($consulta,$y,'Amat');





            echo"<input type=checkbox name=user1[] value=$id>$nom $apat $amat<br> ";
        }
        echo '<br>';
        $sql3="SELECT * FROM grupos WHERE estatus = 1 ORDER BY nombre ASC ";
        $consulta3=mysql_query($sql3) or die ('Error de Consult3');
        $cuantos3=mysql_num_rows($consulta3);
        echo "<select name=user2>";
        echo"<option value=t>--Seleccionar--</option>";
        for ($y=0; $y<$cuantos3; $y++)
        {
            $id=mysql_result($consulta3, $y, 'idgrupo');
            $nom=mysql_result($consulta3, $y, 'nombre');
            echo"<option value=$id>$nom </option>";
        }
        echo "</select>";
        echo "<br><br><input type=submit name=submit value=Agregar />";
        echo "</form>";



        echo "</table>";
        echo "</div>";
    }
} 