<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Memory Game</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/indexcss/jeu.css">
</head>
<body class="bodyJeu">
<?php
include_once 'assets/includes/header.php';
?>

	<div class="container">
		<h1>Memory Game</h1>
		<div class = "dashboard">
			<div class="dashboard-element">
				<i class=" dashboard-icon fas fa-stopwatch"></i> <span id="timer"></span>
			</div>
			<div class="dashboard-element">
				<i class=" dashboard-icon fas fa-clone"></i> <span id="moves"></span>
			</div>
		</div>
		<div id="stars">
			<i class="fas fa-star" id="rating-poor"></i>
			<i class="fas fa-star" id="rating-average"></i>
			<i class="fas fa-star" id="rating-perfect"></i>
		</div>	
		<div id="form">
			<input type="radio" id="easyMode"
			name="difficulty" value="easy">
			<label for="easyMode">Facile</label>
			<input type="radio" id="normalMode"
			name="difficulty" value="normal" checked="checked">
			<label class="checked" for="normalMode">Intermédiaire</label>
			<input type="radio" id="hardMode"
			name="difficulty" value="hard">
			<label for="hardMode">Difficile</label>
		</div>
		<div class="game-board">
		</div>
		<i id = "reset" class="fas fa-redo-alt"></i>
	</div>
	<div class="modal">
		<div class="modal-inner">
			<h3>Bien joué !</h3>
			<p class="modal-text">Tu as gagné en : <span id="final-time"></span> scondes avec <span id="final-moves"></span> coups</p>
			<p class="modal-text" id="final-rating"></p>
			<p class="modal-text" id="replay"> <i class="fas fa-redo-alt"></i> Rejoue ?</p>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>