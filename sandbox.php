<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sandbox</title>
    <link rel="stylesheet" href="assets/css/indexcss/sandbox.css">
</head>
<body>
    <h1>JS Sandbox</h1>
    <p id="sdbx">THIS IS A SANDBOX</p>
    <div class="devinette-container">
        <h2>Devinette</h2>
        <input type="text" class="input" oninput="this.value|=0" min="0" max="""100" placeholder="Réponse">
        <button class="devinette-button">Valider</button>
        <button class="start-button">Start</button>

    </div>

    <div class="rslt-container">
    <div class="results">
        <h2 id="rgm">Résultats</h2>
        <p id="results1"></p>
        <p id="results2"></p>
        <p id="results3"></p>
        <p id="results4"></p>
        <p id="results5"></p>
        <p id="results6"></p>
        <p id="results7"></p>
        <p id="results8"></p>
        <p id="results9"></p>
        <p id="results10"></p>
    </div>
    </div>
    <button class="reset">RESET</button>

<script src="assets/js/sandbox.js"></script>
</body>
</html>
