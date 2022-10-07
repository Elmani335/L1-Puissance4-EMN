const moves = document.getElementById("moves-count");
const timeValue = document.getElementById("time");
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const gameContainer = document.querySelector(".game-container");
const result = document.getElementById("result");
const controls = document.querySelector(".controls-container");
let cards;
let interval;
let firstCard = false;
let secondCard = false;
// Array des objets
const items = [
  { name: "bee", image: "/assets/images/image-jeu-1.jpg"},
  { name: "crocodile", image: "/assets/images/image-jeu-2.jpg"},
  { name: "macaw", image: "/assets/images/image-jeu-3.jpg"},
  { name: "gorilla", image: "/assets/images/image-jeu-4.jpg" },
  { name: "tiger", image: "/assets/images/image-jeu-5.jpg" },
  { name: "monkey", image: "/assets/images/image-jeu-6.jpg" },
  { name: "chameleon", image: "/assets/images/image-jeu-7.jpg" },
  { name: "piranha", image: "/assets/images/image-jeu-8.jpg" },
  { name: "anaconda", image: "/assets/images/image-jeu-9.jpg" },
  { name: "sloth", image: "/assets/images/image-jeu-10.jpg" },
  { name: "cockatoo", image: "/assets/images/image-jeu-11.jpg" },
  { name: "toucan", image: "/assets/images/image-jeu-12.jpg" },
];
// Temps initial
let seconds = 0,
  minutes = 0;
// Coups initaux + timer
let movesCount = 0,
  winCount = 0;
// For timer
const timeGenerator = () => {
  seconds += 1;
  // logiique des minutes
  if (seconds >= 60) {
    minutes += 1;
    seconds = 0;
  }
  // Format du temps
  let secondsValue = seconds < 10 ? `0${seconds}` : seconds;
  let minutesValue = minutes < 10 ? `0${minutes}` : minutes;
  timeValue.innerHTML = `<span>Time:</span>${minutesValue}:${secondsValue}`;
};
// Calcul des coups
const movesCounter = () => {
  movesCount += 1;
  moves.innerHTML = `<span>Moves:</span>${movesCount}`;
};
// Selectionne un item du array
const generateRandom = (size = 4) => {
  //temporary array
  let tempArray = [...items];
  // Initialise la valeur de la carte
  let cardValues = [];
  // Initialise la taille
  size = (size * size) / 2;
  // Selection de l'objet
  for (let i = 0; i < size; i++) {
    const randomIndex = Math.floor(Math.random() * tempArray.length);
    cardValues.push(tempArray[randomIndex]);
    // On sort l'objet de l'array
    tempArray.splice(randomIndex, 1);
  }
  return cardValues;
};
const matrixGenerator = (cardValues, size = 4) => {
  gameContainer.innerHTML = "";
  cardValues = [...cardValues, ...cardValues];

  cardValues.sort(() => Math.random() - 0.5);
  for (let i = 0; i < size * size; i++) {
    /*
        Je crée la carte
        before = le dos de la carte
        after = l'image
        data-card-values store la valeur et le nom de la carte pour détecter la carte plus tard
      */
    gameContainer.innerHTML += `
     <div class="card-container" data-card-value="${cardValues[i].name}">
        <div class="card-before">?</div>
        <div class="card-after">
        <img src="${cardValues[i].image}" class="image"/></div>
     </div>
     `;
  }
  // Grid
  gameContainer.style.gridTemplateColumns = `repeat(${size},auto)`;
  // Cards
  cards = document.querySelectorAll(".card-container");
  cards.forEach((card) => {
    card.addEventListener("click", () => {
      // Si la carte selectionner n'est pas match alors le script run
      if (!card.classList.contains("matched")) {
        // On retourne la carte selectionnée
        card.classList.add("flipped");
        // si c'est la première carte alors valeur = false
        if (!firstCard) {
          // la carte actuelle va devenir la première carte
          firstCard = card;
          // la valeur de "CurrentCrd" devient "firstCardValue"
          firstCardValue = card.getAttribute("data-card-value");
        } else {
          // On incrémente le move quand le joueur selectionne la deuxième carte
          movesCounter();
          //secondCard and value
          secondCard = card;
          let secondCardValue = card.getAttribute("data-card-value");
          if (firstCardValue == secondCardValue) {
            // Si les deux cartes sont similaires on ajoute la class "matched" pour qu'elles soient ignorées dans le futur
            firstCard.classList.add("matched");
            secondCard.classList.add("matched");
            // On initialise "firstCard" a false puisque la prochaine carte sera initialisé a first
            firstCard = false;
            // "winCount" incrémente quand le joueur trouve une paire
            winCount += 1;
            // check si "winCount" == moitié de "cardValues"
            if (winCount == Math.floor(cardValues.length / 2)) {
              result.innerHTML = `<h2>You Won</h2>
            <h4>Moves: ${movesCount}</h4>`;
              stopGame();
            }
          } else {
            // si la carte est pas similaire
            // on retourne la carte de dos
            let [tempFirst, tempSecond] = [firstCard, secondCard];
            firstCard = false;
            secondCard = false;
            let delay = setTimeout(() => {
              tempFirst.classList.remove("flipped");
              tempSecond.classList.remove("flipped");
            }, 900);
          }
        }
      }
    });
  });
};
// Start game
startButton.addEventListener("click", () => {
  movesCount = 0;
  seconds = 0;
  minutes = 0;
  // controles et boutons visibilité
  controls.classList.add("hide");
  stopButton.classList.remove("hide");
  startButton.classList.add("hide");
  // Début timer
  interval = setInterval(timeGenerator, 1000);
  // initial moves
  moves.innerHTML = `<span>Moves:</span> ${movesCount}`;
  initializer();
});
// Stop game
stopButton.addEventListener(
  "click",
  (stopGame = () => {
    controls.classList.remove("hide");
    stopButton.classList.add("hide");
    startButton.classList.remove("hide");
    clearInterval(interval);
  })
);

const initializer = () => {
  result.innerText = "";
  winCount = 0;
  let cardValues = generateRandom();
  console.log(cardValues);
  matrixGenerator(cardValues);
};

