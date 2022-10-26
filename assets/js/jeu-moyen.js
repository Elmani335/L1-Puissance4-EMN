var library = {
    pokemonFeu: [
      'https://img.pokemondb.net/sprites/black-white/normal/charizard.png',
      'https://img.pokemondb.net/sprites/black-white/normal/rapidash.png',
      'https://img.pokemondb.net/sprites/black-white/normal/flareon.png',
      'https://img.pokemondb.net/sprites/black-white/normal/moltres.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/groudon.png',
      'https://img.pokemondb.net/sprites/black-white/normal/magcargo.png',
      'https://img.pokemondb.net/sprites/black-white/normal/entei.png',
      'https://img.pokemondb.net/sprites/black-white/normal/blaziken-f.png',
      'https://img.pokemondb.net/sprites/x-y/shiny/heatran.png',
      'https://img.pokemondb.net/sprites/x-y/normal/darmanitan-standard.png',
      'https://img.pokemondb.net/sprites/black-white/normal/charizard.png',
      'https://img.pokemondb.net/sprites/black-white/normal/rapidash.png',
      'https://img.pokemondb.net/sprites/black-white/normal/flareon.png',
      'https://img.pokemondb.net/sprites/black-white/normal/moltres.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/groudon.png',
      'https://img.pokemondb.net/sprites/black-white/normal/magcargo.png',
      'https://img.pokemondb.net/sprites/black-white/normal/entei.png',
      'https://img.pokemondb.net/sprites/black-white/normal/blaziken-f.png',
      'https://img.pokemondb.net/sprites/x-y/shiny/heatran.png',
      'https://img.pokemondb.net/sprites/x-y/normal/darmanitan-standard.png',
      
    ],
    pokemonEau: [
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/blastoise.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/golduck.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/poliwrath.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/gyarados-f.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/lapras.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/feraligatr.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/kingdra.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/swampert.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/sharpedo.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/kyogre.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/blastoise.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/golduck.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/poliwrath.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/gyarados-f.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/lapras.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/feraligatr.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/kingdra.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/swampert.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/sharpedo.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/kyogre.png'
    ],
    pokemonElectrique: [
    
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/raichu-f.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/electabuzz.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/jolteon.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/ampharos.png',
      'https://img.pokemondb.net/sprites/ruby-sapphire/normal/raikou.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/manectric.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/electivire.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/luxray-f.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/rotom.png',
      'https://img.pokemondb.net/sprites/black-white/normal/zebstrika.png',
      'https://img.pokemondb.net/sprites/diamond-pearl/normal/raichu-f.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/electabuzz.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/jolteon.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/ampharos.png',
        'https://img.pokemondb.net/sprites/ruby-sapphire/normal/raikou.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/manectric.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/electivire.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/luxray-f.png',
        'https://img.pokemondb.net/sprites/diamond-pearl/normal/rotom.png',
        'https://img.pokemondb.net/sprites/black-white/normal/zebstrika.png'

    ],
  }
  
  var images = [];
  var tempElt1 = "";
  var tempElt2 = "";
  var click = -1;
  var win = 0;
  var score = 0;
  var time = 0;
  
  var preElt = document.querySelector("#pre");
  var themesElt = document.querySelector("#themes");
  var boxElts = document.getElementsByClassName("box");
  var mainElt = document.querySelector(".main"); 
  var timeElt = document.querySelector("#time");
  var scoreElt = document.querySelector("#score");
  var postElt = document.querySelector("#post");
  var finalElt = document.querySelector("#final");
  var againElt = document.querySelector("#again");

  const form = document.getElementById('form');
  
  
  
  // initiate the game with chosen theme
  themesElt.addEventListener("click", function(e) {
    if (e.target.classList.contains("themes")) {
      activateTheme(e.target.id);
      preElt.classList.add("hidden");
    }
  });
  
  
  function activateTheme(theme) {
    // insert theme in images array
    for (let i = 0; i < 20; i++) {images.push(library[theme][i]);}  
    // insert images in memory game
    for (let i = 0; i < 20; i++) {
      var rand = Math.floor(Math.random() * (images.length - 1));
      boxElts[i].innerHTML = "<img src='" + images[rand] + "' alt='image' class='hidden'>";
      images.splice(rand, 1);
    }
  }
  
  
  // Handle the play
  mainElt.addEventListener("click", gameLogic);
  
  function gameLogic(e) {
    // make sure the box is playable
    if (e.target.classList.contains("play")) {
      e.target.firstChild.classList.remove("hidden");
      // first of two click
      if (click < 1) {
        tempElt1 = e.target;
        // timer
        if (click === -1) {
          timer = setInterval(function() {
            time++;
            timeElt.innerHTML = time;
          }, 1000);
        }
        click = 1;
      }
  
      // second click
      else if (e.target !== tempElt1) {
        tempElt2 = e.target;
  
        // different images
        if (tempElt1.firstChild.src !== tempElt2.firstChild.src) {
          mainElt.removeEventListener("click", gameLogic);
          setTimeout( function() {
            tempElt1.firstChild.classList.add("hidden");
            tempElt2.firstChild.classList.add("hidden");
            mainElt.addEventListener("click", gameLogic);
          }, 400);
          if (score > 0) {
            score -= 2;
          }
          scoreElt.innerHTML = score;
        }
  
        // same images
        else {
          score += 10;
          win += 1;
          tempElt1.firstChild.classList.add("outlined");
          tempElt2.firstChild.classList.add("outlined");
          tempElt1.classList.remove("play");
          tempElt2.classList.remove("play");
          scoreElt.innerHTML = score;
  
          // game won
          if (win === 10) {
            clearInterval(timer);
            finalElt.innerHTML = "Tu as gagné ! Ton score est de " + score + " points <br> Ton temps est de " + time + " secondes";
            postElt.classList.remove("hidden");
          }
        }
        click = 0;
      }
    }
  }
  
  againElt.addEventListener("click", resetGame);
  
  function resetGame() {
    // reset game
    tempElt1 = "";
    tempElt2 = "";
    click = -1;
    win = 0;
    score = 0;
    time = 0;
    postElt.classList.add("hidden");
    preElt.classList.remove("hidden");
    for (let i = 0; i < 20; i++) {
      boxElts[i].classList.add("play");
      boxElts[i].firstChild.classList.add("hidden");
    }
    timeElt.textContent = time;
    scoreElt.textContent = score;
  }