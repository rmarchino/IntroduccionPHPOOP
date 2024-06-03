
<?php

//declare(strict_types=1);
include 'includes/header.php';

//Encapsulación

class Coche{
    // public -> se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected -> se puede acceder y modificar únicamente en la clase
    // private -> solo miembros de la misma clase pueden acceder a el.
     
    public function __construct(protected string $color, public string $marca, public string $añoFabricacion, public int $numAsientos, public string $modelo, public string $pais)
    {
    }

    public function mostrarAutos() : void{
        echo "Mostrando el Auto de color: " . $this->color . " de la marca " . $this->marca . ", el año de fabricación es " . $this->añoFabricacion;
    }

    //obtiene el valor
    public function getMarca() : string {
        return $this->marca;
    }

    //mofica el valor
    public function setMarca(string $marca) {
        $this->marca = $marca;
    }
}

$cocheUno = new Coche('Negro', 'Toyota', '2023', 4, 'Toyota 4x4', 'Japon');
//$cocheUno->mostrarAutos();

echo $cocheUno->getMarca();
$cocheUno->setMarca('Chevrolet');


echo "<pre>";
var_dump($cocheUno);
echo "</pre>";

$cocheDos = new Coche('Blanco', 'Toyota', '2024', 6, 'Rap 4', 'China');
//$cocheDos->mostrarAutos();

echo $cocheDos->getMarca();
$cocheDos->setMarca('Suzuki');

echo "<pre>";
var_dump($cocheDos);
echo "</pre>";



include 'includes/footer.php';
