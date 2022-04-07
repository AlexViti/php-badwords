<?php
	include 'poems.php';
	$random = rand(0, count($poems) - 1);
?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php Bad Word</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	html {
		font-family: Verdana, sans-serif;
	}
	body {
		padding: 2rem;
		width: fit-content;
		margin: 0 auto;
	}
	p {
		line-height: 1.6em;
		white-space: pre-line;
	}
	div{
		margin-top: 2rem;
	}
</style>
<body>

<h1><?php echo $titles[$random] ?></h1>
<small>Giacomo Leopardi</small>
<p>
	<?php 
		if (isset($_GET["badword"])) {
			echo str_replace($_GET["badword"], "***", $poems[$random]);
		} else echo $poems[$random];
	?>		
</p>
<div>
	Lunghezza paragrafo: <?php echo strlen($poems[$random]) ?>
</div>
</body>

</html>