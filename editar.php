<?php

require "config.php";
require "dao/UsuarioDAOMySQL.php";
$usuarioDAO = new UsuarioDAOMySQL($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, "id");
if ($id) {

    $usuario = $usuarioDAO->findById($id);
}
if ($usuario === false) {
    header("Location: index.php");
    exit;
}

require "header.php";
?>

<h1>Editar Usuário</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" placeholder="digite seu nome" value="<?= $usuario->getNome(); ?>">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="digite seu email" value="<?= $usuario->getEmail(); ?>">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php require "footer.php"; ?>