
<?php

class Carro {

    private $modelo;
    private $consumo; 
    private $tanque; 

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecimento realizado com sucesso! Adicionados {$litros} litro(s) ao '{$this->modelo}'.<br>";
        } else {
            echo "Erro: A quantidade para abastecer deve ser maior que zero.<br>";
        }
    }

    public function dirigir($km) {

        $combustivelNecessario = $km / $this->consumo;

        if ($combustivelNecessario <= $this->tanque) {
            $this->tanque -= $combustivelNecessario;
            echo "Viagem realizada! O '{$this->modelo}' percorreu {$km} km e consumiu " . number_format($combustivelNecessario, 2, ',', '.') . " litros.<br>";
        } else {
            echo "Erro: Combustível insuficiente para percorrer {$km} km com o '{$this->modelo}'. Tanque atual: " . number_format($this->tanque, 2, ',', '.') . "L.<br>";
        }
    }

    public function exibirInfo() {
        echo "Modelo: {$this->modelo} | Consumo: {$this->consumo} km/L | Tanque: " . number_format($this->tanque, 2, ',', '.') . " L<br>";
    }
}

// --- Teste ---

// Criação de carro
$carro1 = new Carro("Sedan Luxo", 12, 5);
$carro1->exibirInfo();

// Abastecimento
$carro1->abastecer(30);
$carro1->exibirInfo();

// Dirigindo 
$carro1->dirigir(120);
$carro1->exibirInfo();

// Distancia que a gasolina dá
$carro1->dirigir(1000);

echo "<hr>";

// Criação de um carro
$carro2 = new Carro("Hatch Popular");
$carro2->exibirInfo();

// Abastecendo e depois dirigindo o outro carro
$carro2->abastecer(20);
$carro2->dirigir(150);
$carro2->exibirInfo();

?>