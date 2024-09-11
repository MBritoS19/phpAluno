
<?php
session_start();
$pg_atual = 'resultado';

include 'navbar.php';
include 'aluno.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $media = $_POST['media'];
    $altura = $_POST['altura'];

    // Cria um novo objeto Aluno com os novos dados
    $aluno = new Aluno($nome, $dataNascimento, $media, $altura);

    // Armazena o objeto aluno na sessão
    $alunoDiferente = serialize($aluno);
    $_SESSION['aluno'] = $alunoDiferente;

    // Redireciona para a página que mostra os dados
    header("Location: mostra.php");
    exit();
}

