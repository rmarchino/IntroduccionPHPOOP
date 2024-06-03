<?php include 'includes/header.php';

/**INTERFACES */
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

class Auto extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $nombre)
    {
    }

    public function getInfo(): string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona y es de marca ";
    }

    public function getNombre() : string {
        return $this->nombre;
    }

}

$auto = new Auto(4, 5, ' Toyota');
echo $auto->getInfo();
echo $auto->getNombre();

echo "<hr>";

$motoLineal = new Transporte(2, 1);
echo $motoLineal->getInfo();




include 'includes/footer.php';
