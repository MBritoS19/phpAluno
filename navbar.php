<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="formulario.php">Aluno</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php if ($pg_atual == 'formulario'): ?>
            <a class="nav-link active" aria-current="page" href="#">Formulario</a>
          <?php else: ?>
            <a class="nav-link" href="formulario.php">Formulario</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($pg_atual == 'mostra'): ?>
            <a class="nav-link active" aria-current="page" href="#">Mostra</a>
          <?php else: ?>
            <a class="nav-link" href="mostra.php">Mostra</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if ($pg_atual == 'mostraIdade'): ?>
            <a class="nav-link active" aria-current="page" href="#">Mostra idade</a>
          <?php else: ?>
            <a class="nav-link" href="mostra_idade.php">Mostra idade</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>