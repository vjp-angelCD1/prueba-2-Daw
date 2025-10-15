<?php
// Recogemos los datos
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$url = $_POST['url'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$convivientes = $_POST['convivientes'] ?? '';
$aficiones = $_POST['aficiones'] ?? [];
$menu = $_POST['menu'] ?? [];

// Arrays con los valores válidos
$sexos_validos = ['Masculino', 'Femenino', 'Otro'];
$aficiones_validas = ['Deporte', 'Música', 'Lectura', 'Viajar'];
$menu_validos = ['Pizza', 'Sushi', 'Hamburguesa', 'Ensalada'];

// Validaciones
$errores = [];

if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Email no válido.";
}

if (!filter_var($url, FILTER_VALIDATE_URL)) {
    $errores[] = "URL no válida.";
}

if (!in_array($sexo, $sexos_validos)) {
    $errores[] = "Sexo no válido.";
}

if (!is_numeric($convivientes) || $convivientes < 0) {
    $errores[] = "Número de convivientes no válido.";
}

// Validar que las aficiones estén dentro de las válidas
foreach ($aficiones as $a) {
    if (!in_array($a, $aficiones_validas)) {
        $errores[] = "Afición no válida: $a";
    }
}

// Validar menú
foreach ($menu as $m) {
    if (!in_array($m, $menu_validos)) {
        $errores[] = "Menú no válido: $m";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de formulario</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        td, th { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .error { color: red; }
    </style>
</head>
<body>
<h2>Resultado del formulario</h2>

<?php if(!empty($errores)): ?>
    <div class="error">
        <p><strong>Se encontraron errores:</strong></p>
        <ul>
            <?php foreach($errores as $e) echo "<li>$e</li>"; ?>
        </ul>
        <p><a href="403formulario.html">Volver al formulario</a></p>
    </div>
<?php else: ?>
    <table>
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>Nombre y apellidos</td><td><?= htmlspecialchars($nombre) ?></td></tr>
        <tr><td>Email</td><td><?= htmlspecialchars($email) ?></td></tr>
        <tr><td>URL página personal</td><td><a href="<?= htmlspecialchars($url) ?>" target="_blank"><?= htmlspecialchars($url) ?></a></td></tr>
        <tr><td>Sexo</td><td><?= htmlspecialchars($sexo) ?></td></tr>
        <tr><td>Número de convivientes</td><td><?= htmlspecialchars($convivientes) ?></td></tr>
        <tr><td>Aficiones</td><td><?= htmlspecialchars(implode(", ", $aficiones)) ?></td></tr>
        <tr><td>Menú seleccionado</td><td><?= htmlspecialchars(implode(", ", $menu)) ?></td></tr>
    </table>
<?php endif; ?>

</body>
</html>
