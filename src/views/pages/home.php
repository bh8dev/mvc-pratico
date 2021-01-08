<?php $render('header'); ?>

<section style="margin-bottom: 10px;">
    <a href="<?= $base; ?>/novo/">Novo Usuário</a>
</section>

<main>
    <table border="1" style="width: 100%; text-align: center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?=$usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>
                <td>
                    <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar/">[ Editar ]</a>
                    <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir/" onclick="return confirm('Deseja realmente excluir este usuário?');">[ Excluir ]</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php $render('footer'); ?>