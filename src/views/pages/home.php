<?php $render('header'); ?>

<a href="<?=$base;?>/novo/">Novo Usuário</a>

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
            <td><?=$usuario['id_usuario'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id_usuario']; ?>/editar/">[ Editar ]</a>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id_usuario']; ?>/excluir/">[ Excluir ]</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $render('footer'); ?>