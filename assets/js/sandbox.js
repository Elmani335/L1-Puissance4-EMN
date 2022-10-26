/*
const mysquare = document.body.querySelector(".mysquare");

//Créé une fonction pour chopper la position actuelle de la div
const getPosition = (element) => {
    let xPosition = 0;
    let yPosition = 0;
    while (element) {
        xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
        yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
        element = element.offsetParent;
    };
        console.log(xPosition);
        console.log(yPosition);
        return {x: xPosition, y: yPosition};
};



// déplacer le carré vers de nouvelle coordonée une fois cliquer dessus

mysquare.addEventListener("click", () => {
    mysquare.style.left = getPosition(mysquare).x + 10 + "px";
    mysquare.style.top = getPosition(mysquare).y + 10 + "px";
    console.log("CLICK");
});

console.log("mysquare");
console.log(getPosition(mysquare));

const mysquare2 = document.body.querySelector(".mainsquare");

// flip le carré si on over la souris dessu
mysquare2.addEventListener("click", () => {
    if (mysquare2.style.transform == "rotateY(180deg)") {
        mysquare2.style.transform = "rotateY(0deg)";
    } else {
        mysquare2.style.transform = "rotateY(180deg)";
    }
});

document.addEventListener("keypress", () => {
    if (mysquare2.style.transform === "rotateY(180deg)") {
            mysquare2.style.transform = "rotateY(0deg)";
            console.log(`from 180 to 0`);
        } else {
            mysquare2.style.transform = "rotateY(180deg)";
            console.log(`from 0 to 180`);
        }
});
*/
/*
const flag  = fetch("test.php", { method: "GET" })
    .then((data) => {
        console.log(data);
    });
*/

//recuperer la data avec un fetch du test.php
/*
const getDataOfTestPHP = async () => {
    return await fetch("test.php", { method: "GET" })
    .then((response) => {
        return response.text();
    })
    .then((data) => {
        console.log(data);
    });
}
*/

/*
const call = fetch('http://localhost/L4/test.php',{method:'GET'}).then(
    response => response.json()
).then(res => {
    console.log(res);
});

*/
// ca c'est le bouton start quoi lol
const startbtn = document.body.querySelector(".start-button");
startbtn.disabled = false;
startbtn.style.opacity = "1";
// bloquer le input tant que le star-button n'est pas cliquer
const input = document.body.querySelector(".input");
input.disabled = true;
input.style.opacity = "0.2";
document.querySelector(`.reset`).style.display = "none";

//bloquer le submitbtn tant que le start-button n'est pas cliquer
const submitbtn = document.body.querySelector(".devinette-button");
submitbtn.disabled = true;
submitbtn.style.opacity = "0.2";

const random = Math.floor(Math.random() * 100) + 1;
// généré un nombre entre 1 et 100 et activer le input et le btn valider une fois le boutton start cliquer
startbtn.addEventListener("click", () => {
     random;
     console.log(random);
     input.disabled = false;
     input.style.opacity = "1";
     submitbtn.disabled = false;
     submitbtn.style.opacity = "1";
     input.focus();
     
});

//créé une fonction pour chopper le valeur et la mettre dans input une fois le boutton valider cliquer
submitbtn.addEventListener("click", () => {
     const input = document.body.querySelector(".input");
     console.log(input.value);

});
//reset le jeu
const resetbtn = document.body.querySelector(".reset");
resetbtn.addEventListener("click", () => {
    location.reload();

} );

// compter combien de fois le boutton valider a été cliquer
let count = 0;
console.log(count);
submitbtn.addEventListener("click", () => {
    // condition si le input est vide
    if (input.value == "") {
        alert("Veuillez entrer un nombre");
    }
    else if (input.value >= 0 && input.value <= 100) {
        count++;
        console.log(`tu a cliquer ${count} fois`);
        startbtn.disabled = true;
        startbtn.style.opacity = "0.2";
    }
    }
);


// fonction qui vérifie si le input et égale au nombre random a chaque fois qu'on appuie sur le btn valider et affiche un message en fonction
submitbtn.addEventListener("click", () => {
     if (input.value == random && input.value >= 0 && input.value <= 100) {
      //afficher un message dans le #result
        document.querySelector(`#results`+count).innerHTML = "GG LA BONNE REPONSE EST " + input.value + " - tu a cliqué " + count + " fois";
      console.log("GG BONNE REPONSE !");
     } else if (input.value < random && input.value >= 0 && input.value <= 100 ) {
      document.querySelector(`#results`+count).innerHTML = "Le nombre est plus grand que "+ input.value + " - tu a cliqué " + count + " fois";
     } else if (input.value > random && input.value >= 0 && input.value <= 100) {
      console.log("Le nombre est plus petit");
      document.querySelector(`#results`+count).innerHTML = "Le nombre est plus petit  que "+ input.value + " - tu a cliqué " + count + " fois";
     } else {
        console.log("Veuillez entrer un nombre entre 1 et 10");
        document.querySelector(`#results`+count).innerHTML = "Veuillez entrer un nombre entre 1 et 10";
     }

});

//si le joueur a cliquer 10 fois afficher le bouton reset et le cacher si le joueur a pas cliquer 10 fois
submitbtn.addEventListener("click", () => {
        if (count == 10) {
            input.style.opacity = "0.2";
            input.disabled = true;
            submitbtn.style.opacity = "0.2";
            submitbtn.disabled = true;
            startbtn.disabled = true;
            startbtn.style.opacity = "0.2";
            document.querySelector(`#rgm`).innerHTML = "GAME OVER";
            // mettre le titre reset en rouge
            document.querySelector(`#rgm`).style.background = "red";
            document.querySelector(`.reset`).style.background = "red";
        document.querySelector(`.reset`).style.display = "block";
        } else {
        document.querySelector(`.reset`).style.display = "none";
        }
});






