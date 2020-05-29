<?php
require "config.php";
require "dao/UsuarioDAOMySQL.php";

$usuarioDAO = new UsuarioDAOMySQL($pdo);
$lista = $usuarioDAO->findAll();

require "header.php";

?>


<a class="btn btn-primary" href="adicionar.php">ADICIONAR USUÁRIO</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista as $usuario) : ?>
            <tr>
                <td><?= $usuario->getId(); ?></td>
                <td><?= $usuario->getNome(); ?></td>
                <td><?= $usuario->getEmail();  ?></td>
                <td>
                    <a class="btn btn-secondary btn-sm" href="editar.php?id=<?= $usuario->getId(); ?>">Editar </a>
                    <a class="btn btn-danger btn-sm" href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php require "footer.php" ?>