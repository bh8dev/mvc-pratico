<?php $render('header'); ?>

<section class="user-heading" style="margin-bottom: 10px;">
    <h2>Adicionar novo Usuário</h2>
</section>

<main style="text-align: center;">
    <form class="form-user" action="<?=$base;?>/novo/" method="post">

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" autofocus required>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <button class="btn" type="submit">Adicionar</button>
    </form>
</main>

<?php $render('footer'); ?>