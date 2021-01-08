<?php $render('header'); ?>

<section class="user-heading" style="margin-bottom: 10px;">
    <h2>Editar usuário</h2>
</section>

<main style="text-align: center;">
    <form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar/" method="post">

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="<?= $usuario['nome']; ?>" autofocus required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?= $usuario['email']; ?>" required>

        <button class="btn" type="submit">Atualizar</button>
    </form>
</main>

<?php $render('footer'); ?>