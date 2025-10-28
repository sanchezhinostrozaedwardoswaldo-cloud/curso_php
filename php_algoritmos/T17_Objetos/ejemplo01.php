<?php
class Persona {
    public$nombre;
    public $apellido;
    public $edad;
    public $direccion;

    //Contructor
    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    //Metodo
    public function saludar(){
        return "Hola, mis datos son " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y vivo en " . $this->direccion . ".";
    }
}

// Crear objeto
$persona1 = new Persona("Juan", "Pérez", 30, "Calle Falsa 123");
echo "\n" . $persona1->saludar();
?>
<?php
class Triangulo{
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea(){
        return ($this->ancho * $this->alto) / 2;
    }
}

$miTriangulo = new Triangulo(10, 5);
echo "\n\nEl área del triángulo es: " . $miTriangulo->calcularArea(). "\n";
?>

<?php
class CuentaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Depósito de $$monto realizado, \n";
        }else {
            echo "Monto inválido para depósito.\n";
        }
    }

    public function retirar($monto){
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro de $$monto realizado, \n";
        } else {
            echo "Fondos insuficientes o monto inválido.\n";
        }
    }

    public function mostrarSaldo() {
        echo "El saldo actual de " . $this->titular . " es: $" . $this->saldo . "\n";
    }
}
//Crear objeto cuenta
$cuenta = new CuentaBancaria("Ana Gómez", 1000);

//Operaciones
$cuenta->mostrarSaldo();
$cuenta->depositar(500);
$cuenta->retirar(200);
$cuenta->retirar(2000);
$cuenta->mostrarSaldo();
?>