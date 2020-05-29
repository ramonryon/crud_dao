<?php require "header.php"; ?>

<h1>Adicionar Usuário</h1>

<form method="POST" action="adicionar_action.php">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" placeholder="digite seu nome">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="digite seu email">
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<?php require "footer.php"; ?>