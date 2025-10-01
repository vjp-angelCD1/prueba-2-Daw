<?php
require_once 'Persona.php';

class EmpleadoConTelefonos extends Empleado {
    
    // Constructor
    public function __construct(string $nombre, string $apellidos, float $sueldo) {
        parent::__construct($nombre, $apellidos, $sueldo);
    }

    // Redefinir anyadirTelefono si quieres
    public function anyadirTelefono(int $telefono): void {
        parent::anyadirTelefono($telefono); // usa el array de la clase padre
    }

  // Método estático toHtml
public static function toHtml(EmpleadoConTelefonos $emp): string {
    $html  = "<p>Nombre completo: {$emp->getNombreCompleto()}<br>";
    $html .= "Sueldo: {$emp->getSueldo()}€<br>";
    $html .= "Teléfonos: " . $emp->listarTelefonos() . "</p>";
    $html .= $emp->debePagarImpuestos() ? "<p>Debe pagar impuestos</p>" : "<p>No debe pagar impuestos</p>";
    return $html;
}

}


      


?>