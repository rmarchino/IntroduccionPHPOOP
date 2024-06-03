
<?php

//declare(strict_types=1);
include 'includes/header.php';

// Métodos Estáticos

class Autos{
    
    public $iamgen;
    public static $imagenPlaceholder = 'imagen.jpg';

    public function __construct(protected string $color, public string $marca, public string $añoFabricacion, public int $numAsientos, public string $modelo, public string $pais, string $iamgen)
    {
        if ($iamgen) {
            self::$imagenPlaceholder = $iamgen;
        }
    }

    public static function obtenerImagenAuto() {
        return "Obteniendo la imagen " . self::$imagenPlaceholder . " ";
    }

    public static function obtenerAuto() {
        echo "Obteniendo datos del auto" . " ";
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

//ejecutar función estática
// echo Autos::obtenerImagenAuto();
// echo Autos::obtenerAuto();

$cocheUno = new Autos('Negro', 'Toyota', '2023', 4, 'Toyota 4x4', 'Japon', '');
//$AutosUno->mostrarAutos();

echo $cocheUno->obtenerImagenAuto();
echo $cocheUno->getMarca();
$cocheUno->setMarca('Chevrolet');


echo "<pre>";
var_dump($cocheUno);
echo "</pre>";

$cocheDos = new Autos('Blanco', 'Toyota', '2024', 6, 'Rap 4', 'China', 'toyota.jpg');
//$cocheDos->mostrarAutos();

echo $cocheDos->obtenerImagenAuto();
echo $cocheDos->getMarca();
$cocheDos->setMarca('Suzuki');

echo "<pre>";
var_dump($cocheDos);
echo "</pre>";



include 'includes/footer.php';
