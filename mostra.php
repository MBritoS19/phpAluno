<!DOCTYPE html>
<html>

<head>
    <title>Dados Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $pg_atual = 'mostra';

    include 'navbar.php';
    include 'aluno.php';

    session_start();
    if (isset($_SESSION['aluno'])) {
        $aluno = unserialize($_SESSION['aluno']);
    }
    else {
        echo "Nenhum aluno cadastrado!";
        exit();
    }
    ?>
    <div class='container-fluid'>
        <h1>Dados do Aluno</h1>
        <p><strong>Nome:</strong> <?php echo $aluno->nome; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $aluno->dataNascimento; ?></p>
        <p><strong>Média:</strong> <?php echo $aluno->media; ?></p>
        <p><strong>Altura:</strong> <?php echo $aluno->altura; ?> metros</p>
    <p><a href="mostra_idade.php">Ver Idade do Aluno</a></p>
    <p><a href="sair.php">Sair</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>