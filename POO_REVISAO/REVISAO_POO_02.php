
<?php

class Carro
{
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade = 0)
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function acelerar()
    {
        $this->velocidade = $this->velocidade + 10;
    }

    public function frear()
    {
        $this->velocidade = $this->velocidade - 10;

        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }
    }

    public function verVelocidade()
    {
        echo "Velocidade atual: " . $this->velocidade . " km/h<br>";
    }
}

$carro1 = new Carro("Honda Civic");

$carro1->verVelocidade();

$carro1->acelerar();
$carro1->acelerar();

$carro1->verVelocidade();

$carro1->frear();

$carro1->verVelocidade();

?>
