<?php $render('header'); ?>

<h2>Editar usuário</h2>

<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar/" method="post">

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="<?= $usuario['nome']; ?>" autofocus required>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" value="<?= $usuario['email']; ?>" required>

    <button type="submit">Atualizar</button>
</form>

<?php $render('footer'); ?>