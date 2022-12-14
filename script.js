const form = document.querySelector("form");
const email = document.getElementById("mail");
const emailError = document.querySelector("#mail + span.error");

email.addEventListener("input", (event) => {

    if (email.validity.valid) {

        emailError.textContent = ""; // Reset the content of the message
        emailError.className = "error"; // Reset the visual state of the message
    } else {

        showError();
    }
});

form.addEventListener("submit", (event) => {
    if (!email.validity.valid) {
        showError();
        event.preventDefault();
    }
});

function showError() {
    if (email.validity.valueMissing) {

        emailError.textContent = "You need to enter an e-mail address.";
    } else if (email.validity.typeMismatch) {

        emailError.textContent = "Entered value needs to be an e-mail address.";
    } else if (email.validity.tooShort) {

        emailError.textContent = `Email should be at least ${email.minLength} characters; you entered ${email.value.length}.`;
    }


    emailError.className = "error active";
}