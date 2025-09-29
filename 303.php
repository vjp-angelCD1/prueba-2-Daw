<?php
// Importa la clase padre
require_once '301.php';

class EmpleadoConTelefonos extends Empleado {
    private array $telefonos = [];

    public function __construct($nombre, $apellido, ...$sueldos) {
        parent::__construct($nombre, $apellido, ...$sueldos); 
       
    }

    public function mostrar() {
        // Recupero sueldos
        $sueldos = $this->getSueldo();

        // Compruebo si es array
        if (is_array($sueldos)) {
            $sueldosStr = implode(", ", $sueldos);
        } else {
            $sueldosStr = $sueldos; // un solo sueldo
        }

        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Apellido: " . $this->getApellidos() . "<br>";
        echo "Sueldos: " . $sueldosStr . "<br>";
        echo "Teléfonos: " . $this->listarTelefonos() . "<br>";
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        if (empty($this->telefonos)) {
            return "Sin teléfonos";
        }
        return implode(" / ", $this->telefonos);
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

// Ejemplo de uso:
$emp = new EmpleadoConTelefonos("Juan", "Pérez", 1200, 1500, 1800);
$emp->anyadirTelefono(666111222);
$emp->anyadirTelefono(666333444);
$emp->mostrar();
?>
