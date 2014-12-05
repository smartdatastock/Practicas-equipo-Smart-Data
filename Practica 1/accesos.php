<?php
include('bd.php');
    $Id=$_GET['Id'];
    if($Id=="")
    {
        $msg='';
        print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
        exit;
    }
    else
    {
        setcookie('Id',$Id);
        setcookie('accesos',1);
        session_start();
        $_SESSION['Id']=$Id;
        $_SESSION['accesos']=1;
        $sql="select * from usuario where Id=$Id";
        $consulta=mysql_query($sql) or die ("error consulta");
        $Nivel=mysql_result($consulta,0,'Nivel');
        if ($Nivel==1)
        {
            print"<meta http-equiv='refresh' content='0;url=inicio.php'>";
            exit;
        }
        else
        {
            print"<meta http-equiv='refresh' content='0;url=inicio2.php'>";
            exit;
        }

    }


?>