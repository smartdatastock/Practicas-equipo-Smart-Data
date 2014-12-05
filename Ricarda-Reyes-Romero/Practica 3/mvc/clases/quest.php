<?php
class question{
    private $idpregunta;
    private $idrespuesta;
    private $pregunta;
    private $respuesta;

    public function ($a1 , $a2 , $a3 , $a4 , $a5 , $a6 , $a7 , $a8 , $a9 , $a10){
       $resultado = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10;
        $sqlmn1="SELECT * FROM usu WHERE id_usuario = 'usr1' ";
        $consultamn = mysql_query($sqlmn1) or die ("error 1");
        $idu = mysql_result($consultamn,0,'calificacion');
        if ($resultado > $idu){
            $sqlmn2=" update `p3poo`.`usu`
            set
            `calificacion` = 'calificacion',
            where `id_usuario` = 'usr1'";
            $consultamn2 = mysql_query($sqlmn2)
        }


    }
    public function preguntas()
    {
        echo "
        <form name=alumno action=quest.php method=Post>
            <table align=center border=0>
            <tr>
                <td colspan=15 ><p><center>Sistema de Cuestionarios</center></p></td>
            </tr>";
            for ($i = 0; $i < 10; $i++) {
                    ${"rand" . $i} = rand(1, 10);
                    ${"sqlpre" . $i} = "SELECT * FROM preguntas WHERE id_preg = ${"rand" . $i} ";
                    ${"execute" . $i} = mysql_query(${"sqlpre" . $i})or die ("Consulta no valida");
                    ${"pregunta" . $i} = mysql_result(${"execute" . $i},0,'pregunta');
                    echo"<tr>
                            <td colspan=9 >
                                <p>
                                    ";
                    echo                    ${"pregunta" . $i};
                    echo"
                                </p>
                            </td>
                        </tr>";
                for ($o = 0; $o < 1; $o++){
                    ${"sqlres" . $i} = "SELECT * FROM resp WHERE id_pregunta = ${"rand" . $i} ";
                    ${"execute2" . $i} = mysql_query(${"sqlres" . $i})or die ("Consulta no valida");
                    ${"respuesta1txt" . $i} = mysql_result(${"execute2" . $i},0,'texto');
                    ${"respuesta1id" . $i} = mysql_result(${"execute2" . $i},0,'valor');
                    ${"respuesta2txt" . $i} = mysql_result(${"execute2" . $i},1,'texto');
                    ${"respuesta2id" . $i} = mysql_result(${"execute2" . $i},1,'valor');
                    ${"respuesta3txt" . $i} = mysql_result(${"execute2" . $i},2,'texto');
                    ${"respuesta3id" . $i} = mysql_result(${"execute2" . $i},2,'valor');
                    echo"<tr>";
                    echo"        <td colspan = 5 >";
                    echo"       <input type=radio name=${"radiob" . $i} value=${"respuesta1id" . $i} > ${"respuesta1txt" . $i}<br> ";
                    echo"   </td>";
                    echo"        <td colspan = 5 >";
                    echo"       <input type=radio name=${"radiob" . $i} value=${"respuesta2id" . $i} > ${"respuesta2txt" . $i}<br> ";
                    echo"   </td>";
                    echo"        <td colspan = 5 >";
                    echo"       <input type=radio name=${"radiob" . $i} value=${"respuesta3id" . $i} > ${"respuesta3txt" . $i}<br> ";
                    echo"   </td>";
                    echo"    </tr>";
                }
                echo"<br>
                <tr><td colspan=15><input type=submit name=submit value=Alta /></td></tr>
                </form>";
            }

    }
		

}