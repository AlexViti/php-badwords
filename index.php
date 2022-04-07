<?php
	$paragraph =
		"Sempre caro mi fu quest'ermo colle,
		e questa siepe, che da tanta parte
		dell'ultimo orizzonte il guardo esclude.
		Ma sedendo e mirando, interminati
		spazi di là da quella, e sovrumani
		silenzi, e profondissima quïete
		io nel pensier mi fingo, ove per poco
		il cor non si spaura. E come il vento
		odo stormir tra queste piante, io quello
		infinito silenzio a questa voce
		vo comparando: e mi sovvien l'eterno,
		e le morte stagioni, e la presente
		e viva, e il suon di lei. Così tra questa
		immensità s'annega il pensier mio:
		e il naufragar m'è dolce in questo mare."
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

<h1>L'infinito</h1>
<small>Giacomo Leopardi</small>
<p>
	<?php echo $paragraph ?>		
</p>
<div>
	Lunghezza paragrafo: <?php echo strlen($paragraph) ?>
</div>
</body>

</html>