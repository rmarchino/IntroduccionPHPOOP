<?php include 'includes/header.php';

// include './clases/Clientes.php';
// include './clases/Detalles.php';

use App\Clientes;
use App\Detalles;

//Autoload
function mi_autoload($clase) {
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
spl_autoload_register('mi_autoload');



$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();
echo "<br>";





include 'includes/footer.php';