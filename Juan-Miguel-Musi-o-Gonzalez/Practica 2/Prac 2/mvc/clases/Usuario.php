<?php
/**
 * Created by PhpStorm.
 * User: Juan Miguel
 * Date: 16/10/14
 * Time: 07:59 PM
 */
class Usuario{
    private $name;

    public function getUsuario(){
     echo "<br>monstrar usuario: " .$this->name;

}

public function setUsuario() {
    $this->name = 'juan 1';
    return $this->name;
}
    public function consultaGeneral(){
        $sql01 = "SELECT * FROM usuario WHERE Estatus = 1 ORDER BY Apat ASC";
        $result01 = mysql_query($sql01)or die("Error $sql01");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th><tr>";
        while($field = mysql_fetch_array($result01)){
            $this->Id = $field['Id'];
            $this->Nombre = utf8_decode($field['Nombre']);
            $this->ApellidoPaterno = utf8_decode($field['Apat']);
            $this->ApellidoMaterno = utf8_decode($field['Amat']);
            $this->Nivel = $field['Nivel'];
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
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}