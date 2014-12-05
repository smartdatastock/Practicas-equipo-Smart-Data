<?php
/**
 * Created by PhpStorm.
 * User: Oswaldo
 * Date: 28/10/14
 * Time: 07:00 PM
 */
class preguntas{
    public $id_pregunt;
    public $pregunta;
    public $respuesta;



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
        <strong> Tus Aciertos son:</strong> $suma
            </div>";

        //$_GET['url']='home';
    }

}
