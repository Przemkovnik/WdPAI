const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');

function isEmail(email) {
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email);
}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function() {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        3000
    );
}

emailInput.addEventListener('keyup', validateEmail);