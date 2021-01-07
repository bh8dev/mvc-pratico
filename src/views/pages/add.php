<?php $render('header'); ?>

<h2>Adicionar novo Usuário</h2>

<form action="<?= $base; ?>/novo/" method="post">

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" autofocus required>
    
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">Adicionar</button>
</form>

<?php $render('footer'); ?>