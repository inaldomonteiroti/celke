<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
<?php
require './Usuario.php';
$usuario = new Usuario();
echo $usuario->getDadosUser("Cesar Spark", "cesar@celke.com.br");

?>
    
</body>
</html>