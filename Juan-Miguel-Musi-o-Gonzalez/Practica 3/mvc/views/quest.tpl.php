<?php
    $question = new question();
    if(isset($_POST['submit'])){
        switch($_POST['submit']){
            case "Alta":
                /*echo "<br>Bot&oacute;n:".$_POST['submit'];*/
                $question->Insert(radiob1,radiob2,radiob3,radiob4,radiob5,radiob6,radiob7,radiob8,radiob9,radiob10);
                break;
        }
    }
?>
<html>
    <head>

    </head>
    <body>
    <h1> <?=$titulo ?> </h1>
    <p> <?=$contenido ?> </p>

    <?php
        $question->preguntas();
    ?>

    </body>
</html>


