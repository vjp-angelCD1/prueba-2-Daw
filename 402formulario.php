<?php
// Recogemos los datos del formulario
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$url = $_POST['url'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$convivientes = $_POST['convivientes'] ?? '';
$aficiones = $_POST['aficiones'] ?? [];
$menu = $_POST['menu'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen formulario 402</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Resumen de los datos enviados</h2>
    <table>
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>Nombre y apellidos</td><td><?= htmlspecialchars($nombre) ?></td></tr>
        <tr><td>Email</td><td><?= htmlspecialchars($email) ?></td></tr>
        <tr><td>URL página personal</td><td><?= htmlspecialchars($url) ?></td></tr>
        <tr><td>Sexo</td><td><?= htmlspecialchars($sexo) ?></td></tr>
        <tr><td>Número de convivientes</td><td><?= htmlspecialchars($convivientes) ?></td></tr>
        <tr><td>Aficiones</td><td><?= htmlspecialchars(implode(', ', $aficiones)) ?></td></tr>
        <tr><td>Menú favorito</td><td><?= htmlspecialchars(implode(', ', $menu)) ?></td></tr>
    </table>
    <br>
    <a href="402formulario.html">Volver al formulario</a>
</body>
</html>
