<?php
// FUNCIONES
function esPar(int $num): bool {
    return $num % 2 === 0;
}
// declaramos el tamaño dela array y el rango de números aleatorios
function arrayAleatorio(int $tam, int $min, int $max): array {
    $array = []; // declaramos el array vacío
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function arrayPares(array & $array): int {
    $contador = 0;
    foreach ($array as $num) {
        if (esPar($num)) {
            $contador++;
        }
    }
    return $contador;
}

// PRUEBAS
$numeros = arrayAleatorio(10, 1, 50);
print_r($numeros);
echo "Cantidad de pares: " . arrayPares($numeros);
