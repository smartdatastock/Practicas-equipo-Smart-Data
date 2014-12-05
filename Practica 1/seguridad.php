<?php
$idu=$_COOKIE['Id'];
$accesos=$_COOKIE['accesos'];
if($idu=="" or $accesos=="")
{
    $msg="$idu $accesos";
    print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
    exit;
}

session_start();
$idu2=$_SESSION['Id'];
$accesos2=$_SESSION['accesos'];
if($idu2=="" or $accesos2=="")
{
    $msg="session";
    print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
    exit;
}
?>