<?php
if (isset($_POST['cantidad'])) {
    $cantidad = (int) $_POST['cantidad'];
} else {
    $cantidad = 0;
}

for ($i = 1; $i <= $cantidad; $i++) {
    echo "<label>Número $i: <input type='number' name='numero[]' required></label><br>";
}
?>