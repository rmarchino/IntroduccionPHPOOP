<?php include 'includes/header.php';

/**POLIMORFISMO */
interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;

}

class Transporte implements TransporteInterfaz {

    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    public function getInfo(): string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona";
    }

    public function getRuedas(): int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }

    public function getInfo(): string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona  y tiene el color " . $this->color;
    }

    public function getColor() : string {
        return "Es de color : " . $this->color;
    }

}

echo "<pre>"; 
var_dump( $transporte = new Transporte(8, 20));
var_dump( $auto = new Automovil(4, 5, 'Rojo'));
echo "</pre>";

echo $transporte->getInfo();

echo "<hr>";

echo $auto->getInfo();
echo "<hr>";
echo $auto->getColor();










include 'includes/footer.php';
