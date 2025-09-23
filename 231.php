<?php
// 231bola8.php

// Comprobar si se ha enviado una pregunta desde el formulario
if (!empty($_POST['pregunta'])) {
    $pregunta = htmlspecialchars($_POST['pregunta']);

    // Respuestas posibles de la Bola 8
    $respuestas = [
        "Sí.",
        "No.",
        "Tal vez.",
        "Pregunta de nuevo.",
        "Claro que sí.",
        "Imposible saberlo."
    ];

    // Elegir una respuesta aleatoria
    $respuesta = $respuestas[array_rand($respuestas)];

    // Mostrar pregunta y respuesta
    echo "<h2>Tu pregunta:</h2>";
    echo "<p>$pregunta</p>";
    echo "<h2>La Bola 8 dice:</h2>";
    echo "<p>$respuesta</p>";
    
} else {
    // Si no hay pregunta, mostrar un mensaje
    echo "<p>No has escrito ninguna pregunta. <a href='231bola8.html'>Volver</a></p>";
}
?>