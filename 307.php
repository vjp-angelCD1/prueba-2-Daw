<?php
require_once 'Empleado.php'; // Asegúrate de que este archivo exista

class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    // --- Getters ---
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    // --- Setters ---
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    // --- Representación ---
    public function __toString(): string {
        return "Nombre: {$this->nombre} {$this->apellidos}\n";
    }

    // --- Método estático toHtml ---
    public static function toHtml(Persona $p): string {
        $html = "<p>Nombre completo: " . $p->getNombreCompleto() . "</p>";

        // Si es un Empleado, mostramos sueldo y teléfonos
        if ($p instanceof Empleado) {
            $html .= "<p>Sueldo: " . $p->getSueldo() . "€</p>";
            $html .= "<p>Teléfonos: " . $p->listarTelefonos() . "</p>";
            $html .= $p->debePagarImpuestos() ? "<p>Debe pagar impuestos</p>" : "<p>No debe pagar impuestos</p>";
        }

        return $html;
    }
}

// --- Uso ---
$empleado1 = new Empleado("Juan", "Pérez", 4000);
$empleado1->anyadirTelefono(611223344);

// Mostrar en HTML
echo Persona::toHtml($empleado1);
?>
