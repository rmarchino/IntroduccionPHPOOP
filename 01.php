<?php

declare(strict_types=1);
include 'includes/header.php';

//Definir una clase en PHP 8
class Producto{

    public function __construct(
        public string $nombre,
        public int $precio,
        public bool $disponible
    ) {
    }

    public function mostrarProducto()
    {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio . " soles";
    }
}

$producto = new Producto('Tablet', 500, true);
$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$productoDos = new Producto('Monitor Curbo', 3500, true);
$productoDos->mostrarProducto();

echo "<pre>";
var_dump($productoDos);
echo "</pre>";


//Definir una clase en PHP 7
/*
class Producto
{
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 500, true);
echo "<pre>";
var_dump($producto);
echo "</pre>";

$productoDos = new Producto('Monitor Curbo', 5600, true);
echo "<pre>";
var_dump($productoDos);
echo "</pre>";
*/

/*
//Instanciar la clase
$producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 690;
$producto->disponible = true;

echo "<pre>"; 
var_dump($producto);
echo "</pre>";

//Instanciar la clase
$productoDos = new Producto();
$productoDos->nombre = 'Computador';
$productoDos->precio = 3500;
$productoDos->disponible = true;

echo "<pre>"; 
var_dump($productoDos);
echo "</pre>";
*/

include 'includes/footer.php';
