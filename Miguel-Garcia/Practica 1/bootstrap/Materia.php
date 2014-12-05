<?php
require('bd.php');
class Materia {
    private $id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;

public function InsertVal(){
    echo "<br>entro a metodo insertar";
}

    public function BuscarEspecif(){
        echo "<br>entro a metodo busqueda especifica";
    }

    public function BuscarGenerl(){
        echo "<br>entro a metodo busqueda general";
    }

    public function DeleteReg($id){
        echo "<br>entro a metodo eliminar registro";

        $delete01 = "DELETE FROM asignadas WHERE idasigna = $id";
        $execute = mysql_query($delete01) or die ("Error al eliminar");
        echo "Elimino el registro $id";
    }

    public function Modificar(){
        echo "<br>entro a metodo modificar";
    }
    public function AsignarMateriaMaestro($user){
        $sql01="SELECT materias.`nombre`, personascontrol.`nombre` AS namess ,asignadas.`idasigna` FROM asignadas,materias,personascontrol WHERE asignadas.`idmaestro` = personascontrol.`IdPersona` AND asignadas.`idmateria`=materias.`idmateria` AND personascontrol.`IdPersona` = $user ";
        $consulta = mysql_query($sql01) or die ("error 1 de consulta a materia");
        echo "<div class=table-resposive align=center>";
        echo "<table class=\*table table-striped\ border=1>";
        echo "<tr><td colspan=2 align=center>Materias Asignadas</td></tr>";
        echo"<tr><td>Materias</td><td>Eliminar Materia</td></tr>";
        while($field = mysql_fetch_array($consulta)){
            $this->id = $field['idasigna'];
            $this->Nombre = $field['nombre'];
            $this->asignado = $field['namess'];
        echo "<tr><td>$this->Nombre</td><td><form name=eliminar action=TestMateria.php method=Post><input type=hidden name=id value=$this->id /><input type=submit name=submit value=Eliminar /></form></td></tr>";
        }
        echo "<tr><td colspan=2 align=center>Materias del profesor: $this->asignado </td></tr>";
        echo "</table>";

        echo "</div>";
        }
    public function Agregarme($idprof,$idmat){
        $insert01 = "INSERT INTO asignadas(idmaestro,idmateria) VALUES ($idprof,$idmat)";
        $execute = mysql_query($insert01) or die ("Error al insertar");
    }







    public function AsignarMateriaGrupos(){

    }
}