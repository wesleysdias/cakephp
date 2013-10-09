<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar Post - CakePHP - Blog</title>
</head>
<body>
	<h1>Add Post</h1>
	<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Post');
	?>
</body>
</html>