
<?php

class Aluno
{
    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0)
    {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus()
    {
        if ($this->nota >= 6) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno("Cauã", 8);


$aluno2 = new Aluno("Enzo");

echo "<pre>";

print_r($aluno1);
print_r($aluno2);

echo "</pre>";

echo "Cauã: " . $aluno1->getStatus() . "<br>";
echo "Enzo: " . $aluno2->getStatus();

?>
