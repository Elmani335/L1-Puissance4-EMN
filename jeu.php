<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Memory Game</title>
	
	<link rel="stylesheet" href="assets/css/indexcss/page-jeu.css">
</head>
<body class="bodyJeu">
<?php
include_once 'assets/includes/header.php';
?>

	<div class="jeu-choose-difficulty">
		<p><strong>Choisis ta difficulté </strong></p>
		<li>
		<a class="btn btn-white btn-animated" href="assets/jeu/jeu-facile.php">FACILE</a>
		<a class="btn btn-white1 btn-animated" href="assets/jeu/jeu-moyen.php">MOYEN</a>
		<a class="btn btn-white2 btn-animated" href="assets/jeu/jeu-difficile.php">DIFFICILE</a>
		</li>
	</div>

<?php
include_once 'assets/includes/footer.php';
?>
</body>
</html>