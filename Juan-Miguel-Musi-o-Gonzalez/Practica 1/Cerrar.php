<?php
setCookie('Id',"");
setCookie('accesos',"");
session_start();
session_unset();
session_destroy();
header("Location:index.php?msg=");
exit;
?>