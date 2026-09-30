<?php 
class Aluno extends Usuario{
    public int $xp_total = 0;

    public function __construct(int $id, string $nome, string $email, string $senha, int $xp_total = 0){
        parent::__construct( $id, $nome,  $email, 'Aluno',  $senha);
        $this->xp_total = $xp_total;
    }
}
?>