<?php
require ("Bd.php");
/**
 * Created by PhpStorm.
 * User: Oswaldo
 * Date: 28/10/14
 * Time: 07:00 PM
 */
class preguntas{
    public $id_p;
    public $Pregunta;
    public $Respuesta;
    public $R1;
    public $R2;
    public $R3;

    public function mostrarPreguntas(){
        echo "<form action='validar' method='POST'>";
        echo"<table class=\"table table-striped\">";

        for($y=0;$y<=9;$y++)
        {
        $n=$y+1;
        $sql="SELECT DISTINCT * FROM preguntas ORDER BY RAND () ASC LIMIT 10 ;";
        $consulta=mysql_query($sql);
        $id_p = mysql_result($consulta,0,'id_pregunta');
        $Pregunta = mysql_result($consulta,0,'pregunta');
        $Respuesta = mysql_result($consulta,0,'respuesta');

	//$R1 = mysql_result($consulta,0,'Activa');
	//$R2 = mysql_result($consulta,0,'Nivel');

        echo"<tr class='alert-info'><td class='alert-info'>Pregunta $n:</td></tr><td class='alert-warning'>$Pregunta</td></tr>";
        echo"<tr><td>A.- <input type=radio name=r$n value='$Respuesta'>$Respuesta</input></td></tr>";
	echo"<tr><td>B.- <input type=radio name=r$n value='$R1'>$R1</input></td></tr>";
	echo"<tr><td>C.- <input type=radio name=r$n value='$R2'>$R2</input></td></tr>";
    echo"<input type=text name=idp$n hidden value=$id_p>";


}
        echo"<tr><td><center><input class='btn btn-lg btn-success' type=submit value=Enviar></center></td></tr>";
        echo"</table></form>";

    }
    public function validar(){
        $suma=0;
        for($y=0;$y<=9;$y++)
        {
            $n=$y+1;
            @$respuesta=$_POST['r'.$n];
            @$id_p=$_POST['idp'.$n];
            $sql="SELECT respuesta FROM preguntas WHERE respuesta='$respuesta' AND id_pregunta=$id_p;";
            $consulta=mysql_query($sql) or die ("Error en la consulta");
            $cont=mysql_num_rows($consulta);
            if($cont!=0)
            {
                $suma=$suma+1;
            }
        }
        echo"<div class='alert alert-danger alert-dismissable'>
         <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>¡Bien hecho! </strong> Tus Aciertos son: $suma
            </div>";

        $_GET['url']='home';
    }

}
?>