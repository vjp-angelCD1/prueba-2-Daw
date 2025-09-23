<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>230aleatorios50.php</title>
</head>
<body>
<?php
// Crear un array con 50 números aleatorios entre 0 y 99
$numeros = array();
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(0, 99);
}

// Mostrar los números
foreach ($numeros as $num) {
    echo $num . " ";
}
?>

</body>
</html>
