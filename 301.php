<?php
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, float $sueldo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    // Métodos adicionales
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    // Método mágico __toString
    public function __toString(): string {
        $info = "Nombre completo: " . $this->getNombreCompleto() . "\n";
        $info .= "Sueldo: " . $this->sueldo . "€\n";
        $info .= $this->debePagarImpuestos() ? "Debe pagar impuestos" : "No debe pagar impuestos";
        $info .= "\n-------------------------\n";
        return $info;
    }
}

// Crear empleados
$empleado1 = new Empleado("Juan", "Pérez", 4000);
$empleado2 = new Empleado("Lucía", "Gómez", 3200);
$empleado3 = new Empleado("Carlos", "Ruiz", 5000);

// Modificar alguno si quieres
$empleado1->setNombre("Pedro");

// Mostrar con echo directamente
echo $empleado1 . "\n"; ;
echo $empleado2 . "\n"; ;
echo $empleado3 . "\n"; ;
?>
