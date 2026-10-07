<?php

class Aula
{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numeroSala;
    public $bloco;

    public function exibirInformacoes()
    {
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "<br>";
        echo "Sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    public function trocarProfessor($novoProfessor)
    {
        $this->professor = $novoProfessor;
        echo "Professor alterado!<br>";
    }

    public function alterarLocal($n_sala, $bloco)
    {
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;
        echo "Local da aula alterado!<br>";
    }
}


// Primeiro objeto

$aula1 = new Aula();

$aula1->disciplina = "Linguagem de marcação";
$aula1->professor = "Gabriel";
$aula1->duracao = "8 horas";
$aula1->numeroSala = 5;
$aula1->bloco = "C";

echo "<h2>Aula 1</h2>";

$aula1->exibirInformacoes();

$aula1->trocarProfessor("Leonardo");

$aula1->alterarLocal(7, "A");

echo "<h3>Dados atualizados:</h3>";

$aula1->exibirInformacoes();


// Segundo objeto

$aula2 = new Aula();

$aula2->disciplina = "Projeto de software";
$aula2->professor = "Leonardo";
$aula2->duracao = "8 horas";
$aula2->numeroSala = "7";
$aula2->bloco = "A";

echo "<h2>Aula 2</h2>";

$aula2->exibirInformacoes();

?> 