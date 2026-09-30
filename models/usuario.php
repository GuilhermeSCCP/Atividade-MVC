<?php

    class Usuario {
        public int $id;
        public string $nome;
        public string $email;
        public string $tipo;

        private string $senha_hash;

        public function definirSenha(string $senha): void{
            $this->senha_hash = password_verify($senha, PASSWORD_BCRYPT);
        }

        public function verificarSenha(string $senha_digitada): bool {
            return password_verify($senha_digitada, $this->senha_hash);
        }

        public function saudacao(): string{
            return "Olá, {$this->nome}!";
        }

        public function __construct(int $id, string $nome, string $email, string $tipo, string $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->tipo = $tipo;
            $this->definirSenha($senha);
        }
    }

    // $instrutor = new Instrutor();
    // $instrutor->materias_leciona = ["programação"];
    // echo $materias_leciona

?>