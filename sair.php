<?php
session_start();
session_destroy(); // Encerra a sessão
header("Location: formulario.php"); // Redireciona para o formulário
exit();
?>