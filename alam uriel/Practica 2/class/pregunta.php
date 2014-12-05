<?php
require ("Bd.php");
require("header.php");
require("guardar.php");
class pregunta{

    public function mostrar_preguntas(){
    $pregunta= new pregunta();

        if(isset($_POST['submit']))
        {
            switch($_POST['submit'])
            {
                case "guardar":
                    echo"<div class='alert alert-danger' role=alert>";
                    echo"<br> Bot&oacute;n:".$_POST['submit'];
                    echo"</div>";
                    $pregunta->guardar_preguntas("$_POST[radio]");
                    break;
            }
        }

        $sql="select * from preguntas";
        $con=mysql_query($sql) or die ("error de $sql");

        echo"<form action=class/pregunta.php method='post'>";
        echo"<table align=center border=1><tr><td><center><strong>Selecciona una opción</strong></center></td></tr>";

        for ($i=1;$i<=13;$i++)
            $a[$i]=0;

        $y = 1;
        $s=0;
        while($y<=10){
            $numero=rand(1, 13);
            $sql1="select * from preguntas where id_pregunta = $numero ";
            $con1=mysql_query($sql1) or die ("error de $sql1");
            $pregunta=mysql_result($con1, 0, 'pregunta');
            $id=mysql_result($con1, 0, 'id_pregunta');

            if($a[$id]!= 1){
                $a[$id]=1;
                $s++;
                echo"<tr><td>$s .- $pregunta</td></tr>";
                $y++;
            }

    }
        echo"<tr><td align=center><input type='submit' value='Guardar' name='guardar'></td></tr>";
        echo"</table></form>";
    }

}