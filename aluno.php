<?php
class Aluno 
{
    public $nome;
    public $dataNascimento;
    public $media;
    public $altura;
    public $idade;

    public function __construct($nome, $dataNascimento, $media, $altura) 
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->media = $media;
        $this->altura = $altura;
    }

    public function idade() 
    {
        $dataNascimento = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($dataNascimento);
        return $idade->y; // Retorna a idade em anos
    }
}