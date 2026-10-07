<?php

class Celular
{
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    public function ligar()
    {
        $this->ligado = true;
        echo "Celular ligado!<br>";
    }

    public function desligar()
    {
        $this->ligado = false;
        echo "Celular desligado!<br>";
    }

    public function usar($consumo)
    {
        $this->bateria = $this->bateria - $consumo;
        echo "Celular usado. Bateria: " . $this->bateria . "%<br>";
    }

    public function carregar($carga)
    {
        $this->bateria = $this->bateria + $carga;
        echo "Celular carregado. Bateria: " . $this->bateria . "%<br>";
    }
}


// Primeiro objeto
$celular1 = new Celular();

$celular1->marca = "Samsung";
$celular1->modelo = "A15";
$celular1->cor = "Preto";
$celular1->bateria = 50;
$celular1->ligado = false;

echo "<h2>Celular 1</h2>";

echo "Marca: " . $celular1->marca . "<br>";
echo "Modelo: " . $celular1->modelo . "<br>";
echo "Cor: " . $celular1->cor . "<br>";

$celular1->ligar();
$celular1->usar(10);
$celular1->carregar(20);
$celular1->desligar();


// Segundo objeto
$celular2 = new Celular();

$celular2->marca = "Apple";
$celular2->modelo = "iPhone 15";
$celular2->cor = "Azul";
$celular2->bateria = 80;
$celular2->ligado = false;

echo "<h2>Celular 2</h2>";

echo "Marca: " . $celular2->marca . "<br>";
echo "Modelo: " . $celular2->modelo . "<br>";
echo "Cor: " . $celular2->cor . "<br>";

$celular2->ligar();
$celular2->usar(20);
$celular2->carregar(10);
$celular2->desligar();

?>