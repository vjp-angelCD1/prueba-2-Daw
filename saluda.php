<?php
if (isset($_GET["nombre"]) && isset($_GET["apellido1"])) {
    $nombre = htmlspecialchars($_GET["nombre"]);
    $apellido1 = htmlspecialchars($_GET["apellido1"]);

    echo "<h2>Hola $nombre $apellido1</h2>";
} else {
    echo "<h2>No has introducido tu nombre y apellido.</h2>";
}
?>