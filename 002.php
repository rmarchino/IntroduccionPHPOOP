<?php

declare(strict_types=1);
include 'includes/header.php';

/**METODOS STATICOS */

//Superclase
class Persona {
    static string $nombre;
    protected string $apellido;
    protected string $email;
    protected string $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        self::$nombre  = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    //método
    public function mostrarInfo() {
        return "Mi nombre es " . self::$nombre . " y mi apellido es " . $this->apellido;
    }

    public static function mostrarNombre() {
        return self::$nombre;
    }
}

//Clases
class Empleado extends Persona {
    public string $departamento;
    public string $codigo;

    public function __construct($nombre, $apellido, $email, $telefono, $departamento, $codigo)
    {
        parent::__construct($nombre, $apellido, $email, $telefono );
        $this->departamento = $departamento;
        $this->codigo = $codigo;
    }

    //modificadores
    public function getInfoEmpleado() {
        return "Los datos del empleado es: " . self::$nombre . " " . $this->apellido . " del departamento de " . $this->departamento;
    }

    public function setDepartamento($departamento) {
        return $this->departamento = $departamento;
    }
}

class Proveedor extends Persona {
    protected string $empresa;
    protected string $direccion;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa, $direccion)
    {
        parent::__construct($nombre, $apellido, $email, $telefono );
        $this->empresa = $empresa;
        $this->direccion = $direccion;
    }

    //metodo - modificadores
    public function getInfoProveedor() {
        return "Los datos del empleado es: " . self::$nombre . " " . $this->apellido . " y pertenece a la empresa " . $this->empresa;
    }

}

//Invocación
$empleado = new Empleado('Robert', 'Marchino López', 'rmarchino95@gmail.com', '985623147', 'TI', '00001');
$empleado->setDepartamento('Base de Datos');
echo $empleado->getInfoEmpleado();
echo "<br>";
echo $empleado::mostrarNombre();

echo "<pre>";
var_dump($empleado);
echo "</pre>";

$proveedor = new Proveedor('José Luis', 'Casas', 'jluis@gmail.com', '985623147', 'TI', '00001');
echo $proveedor->getInfoProveedor();
echo "<br>";
echo Empleado::mostrarNombre();

echo "<pre>";
var_dump($proveedor);
echo "</pre>";
