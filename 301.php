<?php
require_once 'Persona.php';

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos;
    private float $sueldoTope;

    public function __construct(string $nombre, string $apellidos, float $sueldo) {
        parent::__construct($nombre, $apellidos); // hereda nombre y apellidos
        $this->sueldo = $sueldo;
        $this->telefonos = [];
        $this->sueldoTope = 3333;
    }

    // --- Sueldo ---
    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    // --- Teléfonos ---
    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return empty($this->telefonos) ? "Sin teléfonos" : implode(", ", $this->telefonos);
    }

    // --- Impuestos ---
    public function debePagarImpuestos(): bool {
        return $this->sueldo > $this->sueldoTope;
    }

    // --- Representación ---
    public function __toString(): string {
        $info = "Nombre completo: " . $this->getNombreCompleto() . "\n";
        $info .= "Sueldo: " . $this->sueldo . "€\n";
        $info .= "Teléfonos: " . $this->listarTelefonos() . "\n";
        $info .= $this->debePagarImpuestos() ? "Debe pagar impuestos" : "No debe pagar impuestos";
        $info .= "\n-------------------------\n";
        return $info;
    }

    
}
      



?>