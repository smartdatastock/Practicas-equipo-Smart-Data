<?php
class usuario{
    private $name;

    public function getUsusaio(){
        echo"<br>mostrar ususario ".$this->name;
    }
    public function setUsuario(){
        $this->name = "informacion de la clase NSN ";
        return $this->name;
    }
    public function consultaGeneral(){
        $sql01="SELECT * FROM usuario WHERE estatus = 1 ORDER BY id ASC";
        $consulta = mysql_query($sql01) or die ("error consulta general");
        echo "<div class=table-resposive align=center>";
        echo "<table class=\*table table-striped\ border=1>";
        echo "<tr><td colspan=5 align=center>Resultados</td></tr>";
        echo"<tr><td>Numero</td><td>Nombre(s)</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td>";
        while($field = mysql_fetch_array($consulta)){
            $this->IdPersona = $field['id'];
            $this->Nombre = $field['nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoMaterno'];
            $this->Nivel = $field['nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo "<tr><td>$this->IdPersona</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}