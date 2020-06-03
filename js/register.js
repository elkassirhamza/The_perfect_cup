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
        alert.innerHTML = `<div class="alert alert-danger">Enter your <strong>firstName</strong></div> `;
        return;
    } else if (myRegex.test(firstName.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a valid firstname without numbers & symboles</div> `;
        return;
    } else if (lastName.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">Enter your <strong>lastName</strong></div> `;
        return;
    } else if (myRegex.test(lastName.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a valid lastname without numbers & symboles</div> `;
        return;
    } else if (email.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">Enter your <strong>email</strong></div> `;
        return;
    } else if (regExp.test(email.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a valid <strong>email</strong></div> `;
        return;
    } else if (password.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">please enter a <strong>password</strong></div>`;
        return;
    } else if (strongRegex.test(password.value) == false) {
        alert.innerHTML = `<div class="alert alert-danger">Please enter a stong password use "numbers & special caracter"</div> `;
        return;
    } else if (password2.value == "") {
        alert.innerHTML = `<div class="alert alert-danger">please confirm your <strong>password</strong></div>`;
        return;
    } else {
        alert.innerHTML = `<div class="alert alert-success"><strong>your registration confirmed</strong></div>`;
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