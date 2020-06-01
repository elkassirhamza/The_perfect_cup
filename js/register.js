let myForm = document.querySelector('#form');
let firstName = document.querySelector('#fname');
let lastName = document.querySelector('#lname');
let email = document.querySelector('#email');
let password = document.querySelector('#password');
let password2 = document.querySelector('#confirmpassword');

//RegulareExp//
let myRegex = /^[a-zA-Z\s]+$/;
let regExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,3}))$/;
let strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");


//errors//
let myError = document.querySelector('.error');
let alert = document.querySelector('#add_err2');
let pswError = document.querySelector('.error3');

myForm.addEventListener('submit', function (e) {

    e.preventDefault();
    if (firstName.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">Enter your firstName</div> `;
        return;
    } else if (myRegex.test(firstName.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Le first name  doit comporter seulement les lettres</div> `;
        return;
    } else if (lastName.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">Enter your lastName</div> `;
        return;
    } else if (myRegex.test(lastName.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Le last name doit comporter seulement les lettres</div> `;
        return;
    } else if (email.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">Enter your email</div> `;
        return;
    } else if (regExp.test(email.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a valid email</div> `;
        return;
    } else if (password.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">please enter your password</div>`;
        return;
    } else if (strongRegex.test(password.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a stong password use "numbers & special caracter"</div> `;
        return;
    } else if (password2.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">please confirm your password</div>`;
        return;
    } else {
        alert.innerHTML = `<div class="alert alert-success">your registration confirmed</div>`;
    }
});

password2.addEventListener("input", function () {
    if (password2.value != password.value) {
        document.querySelector('.error3').innerHTML = "les deux mdp sont different ";
        return;
    } else {
        document.querySelector('.error3').innerHTML = "";
    }

})