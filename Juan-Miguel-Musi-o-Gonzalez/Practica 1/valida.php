
<?php
$user=$_GET['user'];
$psw=$_GET['psw'];


if($user=="" or $psw=="")
{
    $msg="Los campos deben de llenarse";
    print "<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
    exit;
}
include("bd.php");
$sql="select * from usuario where User='$user' and Psw='$psw'";
$consulta=mysql_query($sql) or die ("error consulta");
$cuantos=mysql_num_rows($consulta);
if($cuantos ==0)
{
    $msg='el usuario o password no son correctos';
    print"<meta http-equiv='refresh' content='15;
url=index.php?msg=$msg'>";
    exit;
}
else
{
    include("bd.php");
    $Id=mysql_result($consulta,0,'Id');
    $Estatus=mysql_result($consulta,0,'Estatus');
    if($Estatus ==2)
    {
        $msg='el usuario no esta activo, consulte a su administrador';
        print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
        exit;
    }
    else
    {
        $Id=("Id=$Id");
        print"<meta http-equiv='refresh' content='0;
url=accesos.php?".$Id."'>";
        exit;
    }
}
?>