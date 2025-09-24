<?php
function mayor(): int {
    $numeros = func_get_args(); // obtenemos todos los parámetros
    $max = $numeros[0]; // asumimos que el primero es el mayor
    foreach ($numeros as $num) {
        if ($num > $max) {
            $max = $num; // actualizamos si encontramos uno mayor
        }
    }
    return $max;
}

echo "Mayor: " . mayor(3, 7, 2, 10, 5); // imprime 10

?>