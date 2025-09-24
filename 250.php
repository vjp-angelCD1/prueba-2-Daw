
<?PHP
// 250fraseImpares.php: Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.
function OBTENERiMPARES(string $frase): string {
    $nuevaFrase = "";
    for ($i = 1; $i < strlen($frase); $i++) {
        if ($i % 2 != 0)
        $nuevaFrase .= $frase[$i];
    }
    return $nuevaFrase;
}

$fraseoriginal = "Hola mundo";
$fraseimpares = OBTENERiMPARES($fraseoriginal);

echo "Frase original: $fraseoriginal\n";
echo "Frase impares: $fraseimpares\n";


?>