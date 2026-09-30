<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade MVC-POO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Resultado do Usuários</h1>

    <div class="usuario">
        <h2>Instrutor</h2>
        <?php if ($resultadoInstrutor !== null)  { ?>
            <p class="sucesso ">
                Login realizado com sucesso!
            </p>

            <p>
                <strong>ID:</strong>
                <?= $resultadoInstrutor->id ?>
            </p>

            <p>
                <strong>Nome:</strong>
                <?= $resultadoInstrutor->nome ?>
            </p>

            <p>
                <strong>E-mail:</strong>
                <?= $resultadoInstrutor->email ?>
            </p>

            <p>
                <strong>Tipo:</strong>
                <?= $resultadoInstrutor->tipo ?>
            </p>

            <p>
                <strong>Matérias:</strong>
                <?= implode(", ", $resultadoInstrutor->materias_lecionadas) ?>
            </p>

            <p>
                <strong>Saudação:</strong>
                <?= $resultadoInstrutor->saudacao() ?>
            </p>
        
        <?php } else { ?>
            <p class="erro">
                E-mail ou senha do instrutor incorretos.
            </p>
        <?php } ?>
        <div>
            
            <h2>Aluno</h2>
            <?php if ($resultadoAluno !== null) {?>

            <p class="sucesso ">
            Login realizado com sucesso!
            </p>

            <p>
                <strong>ID:</strong>
                <?= $resultadoAluno->id ?>
            </p>

            <p>
                <strong>Nome:</strong>
                <?= $resultadoAluno->nome ?>
            </p>

            <p>
                <strong>E-mail:</strong>
                <?= $resultadoAluno->email ?>
            </p>

            <p>
                <strong>Tipo:</strong>
                <?= $resultadoAluno->tipo ?>
            </p>

            <p>
                <strong>Matérias:</strong>
                <?= implode(", ", $resultadoAluno->materias_lecionadas) ?>
            </p>

            <p>
                <strong>Saudação:</strong>
                <?= $resultadoAluno->saudacao() ?>
            </p>
            <?php } else { ?>
                <p class="erro">
                    E-mail ou senha do aluno incorretos.
                </p>
            <?php } ?>
        </div>
    </div>
</body>
</html>