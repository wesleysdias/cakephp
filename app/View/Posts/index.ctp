<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CakePHP - Blog</title>
</head>
<body>

<!-- File: /app/View/Posts/index.ctp -->

<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Adicionar um Post', array('controller' => 'posts', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data de Criação</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
        	<!-- link para ver o post -->
            <?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
            <!-- link para editar o post -->
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
            <!-- link para deletar o post -->
            <?php echo $this->Form->postLink('Deletar', array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Confirma?'))?>

        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</body>
</html>