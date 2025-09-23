<?php
// tablaMultiplicar.php
if (isset($_GET['num']) && is_numeric($_GET['num'])) {
    $num = (int)$_GET['num'];
} else {
    $num = null;
}
if ($num !== null) {
    echo "<h2>Tabla del $num</h2>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>
    <th>Multiplicando</th>
    <th>Multiplicador</th>
    <th>Resultado</th>
    </tr>";
    echo "</thead>";
    echo "<tbody>";
    // Generar la tabla de multiplicar      
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>$i</td>";
        echo "<td>" . ($num * $i) . "</td>";
        echo "</tr>";
    } 
} else {
    echo "<p>No se ha introducido ningún número.</p>";
}

