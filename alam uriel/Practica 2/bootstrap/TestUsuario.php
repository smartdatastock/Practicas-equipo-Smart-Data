<!DOCTYPE html>
<html lang="en">
<?php
require ("Header.php");
?>
<body role="document">
<?php
require ("Usuario.php");
require ("bd.php");

$usuario = new usuario;
echo"<br><br><br>";
$usuario->readUsuarioG();
echo"<br><br>";
$usuario->readUsuarioS(2);
$usuario->createUsuario("Jonathan","G","H","I");
$usuario->updateUsuario(5,"Jonathan","G","H","I");
$usuario->deleteUsuario();
echo"<br><br><br>";
echo"<br><br><br>";
require("footer.php");
?>
</body>
</html>