<?php
	include 'poems.php';
	$random = rand(0, count($poems) - 1);
	$poem = $poems[$random];
	$trimmed_poem = str_replace(" ", "", $poem);
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
		white-space: pre-line;
	}
</style>
<body>

<h1><?php echo $titles[$random] ?></h1>
<small>Giacomo Leopardi</small>
<p>
	<?php 
		if (isset($_GET["badword"])) {
			echo str_replace($_GET["badword"], "***", $poem);
		} else echo $poem;
	?>		
</p>
<div>
Numeri di caratteri: <?php echo strlen($trimmed_poem) ?> 
Numero di parole: <?php echo count(explode(" ", $poem)) ?>
</div>
</body>

</html>