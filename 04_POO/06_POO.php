<?php
echo "<b>Notas</b>";
echo "<br><br>";
     
class Aluno {
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function __construct(string $nome, float $nota1, float $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }

    public function calcularMedia(): float {
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno("Caua Henrik", 8.5, 7.0);

echo "Nome: " . $aluno1->nome . "<br>";
echo "Nota 1: " . $aluno1->nota1 . "<br>";
echo "Nota 2: " . $aluno1->nota2 . "<br>";
echo "Média: " . $aluno1->media . "<br>";

?>