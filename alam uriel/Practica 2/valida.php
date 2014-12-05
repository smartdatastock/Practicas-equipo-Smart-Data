<?php
$pass=$_REQUEST['pass'];
$idmaestro=$_REQUEST['usuario'];

require("base/BD.php");
$sql="select * from usuarios where nombre = '$nombre' and pass = '$pass'";
$con=mysql_query($sql) or die ("error de $sql");
$num=mysql_num_rows($con);
    print"<meta http-equiv='refresh' content='0; url=inicio.php?'>";
