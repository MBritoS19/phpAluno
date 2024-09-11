<!DOCTYPE html>
<html>

<head>
    <title>Idade do Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $pg_atual = 'mostraIdade';

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
    $idade = $aluno->idade();
    ?>
    <div class='container-fluid'>
    <p><?php echo $aluno->nome; ?>, <?php echo $idade; ?> anos</p>

    <p><a href="mostra.php">Voltar</a></p>
    <p><a href="sair.php">Sair</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>\    