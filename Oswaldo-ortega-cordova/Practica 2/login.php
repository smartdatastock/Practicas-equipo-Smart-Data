<?php
require ("menu.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MVC</title>
s
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/theme.css" rel="stylesheet">
</head><body>
<form action="valida.php" method="post">
    <table class='table table-stiped' border="0" align="center">
        <tr><td><STRONG>Usuario:</STRONG></td><td><input type="text" name="nombre"></td></tr>
        <tr><td><strong>Contraseña:</strong></td><td><input type="password" name="pass"></td></tr>
        <tr><td colspan="2" align="left"><input type="submit" VALUE="Accesar"></td></tr>
    </table>
</form>
</body>
</html>