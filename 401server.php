<?php
echo "<h2>Contenido completo de \$_SERVER:</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "---------";
echo "<hr>";

echo "<h2>Parámetros recibidos por GET:</h2>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<h2>Parámetros recibidos por POST:</h2>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<hr>";

if (isset($_SERVER['HTTP_REFERER'])) {
    echo "<p><strong>HTTP_REFERER:</strong> " . $_SERVER['HTTP_REFERER'] . "</p>";
} else {
    echo "<p><strong>HTTP_REFERER:</strong> (no existe, acceso directo)</p>";
}
?>
