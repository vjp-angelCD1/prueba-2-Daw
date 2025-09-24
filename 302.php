<?php
// Importa la clase padre
require_once '301.php';

class EmpleadoConTelefonos extends Empleado {
    private array $telefonos = [];

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function __toString(): string {
        $info = parent::__toString();
        $info .= "Teléfonos: " . $this->listarTelefonos() . "\n";
        return $info;
    }
}

// ✅ Prueba del código:
$empleado = new EmpleadoConTelefonos("Laura", "Martínez", 4200);
$empleado->anyadirTelefono(654321987);
$empleado->anyadirTelefono(600123456);
echo $empleado;
?>
