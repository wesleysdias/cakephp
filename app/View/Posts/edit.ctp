<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar os Posts - CakePHP</title>
</head>
<body>
	<h1>Editar Post</h1>
	<?php
	    echo $this->Form->create('Post', array('action' => 'edit'));
	    echo $this->Form->input('title');
	    echo $this->Form->input('body', array('rows' => '3'));
	    echo $this->Form->input('id', array('type' => 'hidden'));
	    echo $this->Form->end('Save Post');
	 ?>
</body>
</html>