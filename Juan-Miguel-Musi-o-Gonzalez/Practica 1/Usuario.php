<?php
class Usuario {

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contrasena;
    private $Nivel;
    private $Estatus;

    public function readUsuarioG(){
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

    public function readUsuarioS($id){
        $sql02 = "SELECT * FROM usuario WHERE Estatus = 1 AND Id = $id ORDER BY Apat ASC";
        $result02 = mysql_query($sql02)or die("Error $sql02");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th><tr>";
        while($field = mysql_fetch_array($result02)){
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
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
    public function createUsuario($nombre,$apellidop,$apellidom,$nivel){
        //echo "<br>createUsuario";
        $insert01 = " INSERT INTO usuario (Nombre,Apat,Amat,Nivel,Estatus)
                                 VALUES('$nombre','$apellidop','$apellidom',$nivel,1)";
        $execute01 = mysql_query($insert01) or die("Error  $insert01");
    }
    public function updateUsuario($id,$nombre,$apellidop,$apellidom,$nivel){
        //echo "<br>updateUsuario";
        $delete01 = " UPDATE usuario SET Nombre='$nombre', Apat='$apellidop',
            Amat = '$apellidom', Nivel='$nivel' WHERE Id = $id";
        $execute01 = mysql_query($delete01) or die("Error  $delete01");
    }
    public function deleteUsuario($id){
        //echo "<br>deleteUsuario";
        $delete01 = " DELETE FROM alumno_grupo WHERE id = $id";
        $execute01 = mysql_query($delete01) or die("Error  $delete01");
    }
    public function deleteUsuarioS($id){
        $delete01 = " DELETE FROM usuario WHERE Id = $id";
        $execute01 = mysql_query($delete01) or die("Error  $delete01");
    }

}

?>