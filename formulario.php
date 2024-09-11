<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'formulario';

include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Formulario</h1>
        <form action="recebe.php" method="post">
            <label for="nome" class="form-label">Nome:</label>
            <!-- $_GET['nome'] -->
            <input type="text" id="nome" name="nome" class="form-control"><br>

            <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
            <!-- $_GET['dataNascimento'] -->
            <input type="date" id="dataNascimento" name="dataNascimento" class="form-control"><br>

            <label for="media" class="form-label">Media:</label>
            <!-- $_GET['media'] -->
            <input type="number" id="media"step="0.01" name="media" class="form-control"><br>

            <label for="altura" class="form-label">Altura (em metros):</label>
            <!-- $_GET['altura'] -->
            <input type="number" id="altura" step="0.01" name="altura" class="form-control"><br>

            <input type="submit" value="Enviar" name="Enviar" class="btn btn-primary">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>