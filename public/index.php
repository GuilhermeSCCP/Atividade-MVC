<?php 
    require_once "../models/usuario.php";
    require_once "../models/instrutor.php";
    require_once "../models/aluno.php";
    require_once "../controllers/usuario_controllers.php";

    $instrutor = new Instrutor(1, "Pedrão", "PedroTechJf@gmail.com", "123456", ["PHP, Programação Orientada a Objetos"]);
    $aluno = new Aluno(2, "Guilherme", "ViviMaraca@gmail.com", "abcdef", 150);

    $usuarios = [$instrutor, $aluno];

    $controller = new UsuarioController();

    $resultadoInstrutor = $controller->validar_login("PedroTechJf@gmail.com", "123456", $usuarios);
    $resultadoAluno = $controller->validar_login("ViviMaraca@gmail.com", "abcdef", $usuarios);

    require_once "../views/Usuario.php";
?>