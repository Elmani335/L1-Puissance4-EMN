
const error = document.querySelector('#error');
const button = document.querySelector('.button');

const name = document.querySelector('.name');
const phone = document.querySelector('.phone');
const email = document.querySelector('.email');

const nameerr = document.querySelector('#nameerr');
const phoneerr = document.querySelector('#phoneerr');
const emailerr = document.querySelector('#emailerr');

//fonction pour vérifier si le mail est valide
function validateEmail(email) {
    const regex = /\S+@\S+\.\S+/;
    return regex.test(email);
}

//afficher un message une fois le button cliquer
button.addEventListener('click', () => {
    console.log("Name "+name.value);
        if (name.value === '') {nameerr.textContent = 'REQUIRED !';}
        else {nameerr.textContent = '';}
});
button.addEventListener('click', () => {
    console.log("Phone "+phone.value);
    if (name.value === '') {phoneerr.textContent = 'REQUIRED !';}
    else {phoneerr.textContent = '';}
});
button.addEventListener('click', () => {
    console.log("Email "+email.value);
    console.log(validateEmail(email.value));
    if (validateEmail(email.value) === false) {emailerr.textContent = 'INVALID EMAIL !';}
    else if (name.value === '') {emailerr.textContent = 'REQUIRED !';}
    else {emailerr.textContent = '';}
});

//verifier avec une boucle si un élément de la radio est coché

button.addEventListener('click', () => {

    const radio = document.querySelectorAll('.radio');
    console.log(radio);

    for (let i = 0; i < radio.length; i++) {
        if (radio[i].checked) {
            console.log(radio[i].value);
            error.textContent = '';
        } else {
            console.log('no radio element checked');
            error.textContent = 'SELECT TRANSPORT METHOD !';
        }
    }
});





