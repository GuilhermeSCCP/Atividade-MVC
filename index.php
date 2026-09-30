<?php

    class Usuario {
        public int $id;
        public string $nome;
        public string $email;
        public string $tipo;
        protected string $senha;

        public function saudacao(): string{
            return "Olá, {$this->nome}!";
        }

        public function __construct(int $id, string $nome, string $email, string $tipo, string $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->tipo = $tipo;
            $this->senha = $senha;
        }
    }

    $aluno = new Usuario();
    $aluno->nome = "João";
    echo $aluno->saudacao();

    class Instrutor extends Usuario{
        public array $materias_lecionadas;

        public function __construct(int $id, string $nome, string $email, string $senha){
            parent::__construct( int $id, string $nome, string $email, 'Instrutor', string $senha)
        }
    }

    // $instrutor = new Instrutor();
    // $instrutor->materias_leciona = ["programação"];
    // echo $materias_leciona

?>