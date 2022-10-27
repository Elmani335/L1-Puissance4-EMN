<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game Moyen</title>
    <link rel="stylesheet" href="../css/indexcss/jeu.css">
</head>
<body>
    <header>
        <h1>MOYEN</h1>
      </header>
      
      <p>Les règles du jeu : <br> Vous devez trouver les paires ( 10 en Moyen )
      <br> Chaque paire trouvée vous rapporte 10pts <br> Chaque coup raté vous fait perdre 2pts
      </p>
      <section class="main">
        
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        <div class="box play"></div>
        
        <div id="state">
          <span id="time">0</span>
          <span id="score">0</span>
        </div>
        <a href="../../index.php">Retour à l'index</a>
      </section>

      
      
      <section id="pre" class="">
        <div id="themes">
          <h2>Choisis ton thème</h2>
          <p id="pokemonFeu" class="themes" title="Pokemon Feu">Pokemon Feu</p>
          <p id="pokemonEau" class="themes" title="Pokemon Eau">Pokemon Eau</p>
          <p id="pokemonElectrique" class="themes" title="Pokemon Electrique">Pokemon Electrique</p>
          <li>
          <a href="jeu-facile.php">Facile</a>
          <a href="jeu-difficile.php">Difficile</a>
          <a href="../../index.php">Retour a l'index</a>
          </li>
        </div>
      </section>
      
      
      <section id="post" class="hidden">
        <div>
          <h2>BRAVO !</h2>
          <p id="final"></p>
          <br>
          <p>
            <a id="again">Joue encore !</a>
          </p>
        </div>
      </section>
      <script src="../js/jeu-moyen.js"></script>
</body>
</html>