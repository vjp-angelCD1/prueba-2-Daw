<?php
// Importa la clase padre
require_once '301.php';

class EmpleadoConTelefonos extends Empleado {
    private array $telefonos = [];
    // 🔹 Añadimos la constante con el tope del sueldo
    const SUELDO_TOPE = 3000;

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

    // 🔹 Método usando la constante para comprobar impuestos
    public function pagarImpuestos(): void {
        $sueldos = $this->getSueldo();

        if (is_array($sueldos)) {
            $debePagar = false;
            foreach ($sueldos as $sueldo) {
                if ($sueldo > self::SUELDO_TOPE) {
                    $debePagar = true;
                    break;
                }
            }
            if ($debePagar) {
                echo "Debe pagar impuestos: al menos un sueldo supera " . self::SUELDO_TOPE . "$<br>";
            } else {
                echo "No debe pagar impuestos, ninguno de los sueldos supera " . self::SUELDO_TOPE . "$<br>";
            }
        } else {
            if ($sueldos > self::SUELDO_TOPE) {
                echo "Debe pagar impuestos: " . $sueldos . "<br>";
            } else {
                echo "No debe pagar impuestos, su sueldo es menor o igual a " . self::SUELDO_TOPE . "$<br>";
            }
        }
    }
    

    public static function toHtml(EmpleadoConTelefonos $emp): string {
    // Párrafo con nombre, apellido y sueldos
    $sueldos = $emp->getSueldo();
    if (is_array($sueldos)) {
        $sueldosStr = implode(", ", $sueldos);
    } else {
        $sueldosStr = $sueldos;
    }

    $html = "<p>Nombre: " . $emp->getNombre() . "<br>";
    $html .= "Apellido: " . $emp->getApellidos() . "<br>";
    $html .= "Sueldos: " . $sueldosStr . "</p>";

    // Lista ordenada de teléfonos
    $telefonos = $emp->getTelefonos();
    if (!empty($telefonos)) {
        $html .= "<ol>";
        foreach ($telefonos as $tel) {
            $html .= "<li>" . $tel . "</li>";
        }
        $html .= "</ol>";
    } else {
        $html .= "<p>Sin teléfonos</p>";
    }

    return $html;
}

}

// Ejemplo de uso:
$emp = new EmpleadoConTelefonos("Juan", "Pérez", 1200, 1500, 3800);
$emp->anyadirTelefono(666111222);
$emp->anyadirTelefono(666333444);
$emp->mostrar();
$emp->pagarImpuestos();
echo EmpleadoConTelefonos::toHtml($emp);
?>
