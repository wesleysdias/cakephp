<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View - CakePHP - Blog</title>
</head>
<body>
	
	<h1><?php echo $post['Post']['title']?></h1>

	<p><small>Created: <?php echo $post['Post']['created']?></small></p>

	<p><?php echo $post['Post']['body']?></p>
	
</body>
</html>