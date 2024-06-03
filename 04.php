<?php include 'includes/header.php';

// Herencia
class Transporte{

    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    public function getInfo(): string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Biscicleta extends Transporte{
    public function getInfo(): string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y no GASTA GASOLINA";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) {
    }

    public function getTransmision(): string {
        return $this->transmision;
    }
}



$bicicleta = new Biscicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";


$auto = new Automovil(4, 5, ' Mecánica');
echo $auto->getInfo();
echo $auto->getTransmision();





include 'includes/footer.php';
