<html>
<head>
<title>Problemas</title>
</head>
<body>
<?php
echo "La fecha de hoy es:";
setlocale(LC_TIME, 'es_ES');
$fecha = strftime("%i de %B de %y");
echo $fecha;
echo "<br>";
?>
<a href="fecha3.php">Siguiente problema</a>
</body>
</html>
