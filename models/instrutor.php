<?php
class Instrutor extends Usuario{
    public array $materias_lecionadas = [];

    public function __construct(int $id, string $nome, string $email, string $senha, array $materias_lecionadas = []){
        parent::__construct( $id, $nome, $email, 'instrutor', $senha);
        $this-> materias_lecionadas = $materias_lecionadas;
    }
}
?>