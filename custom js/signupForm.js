function nameValidation() {

    var uName = document.getElementById("userNameid");
    var uNameErrorMsg = document.getElementById("userNameErrorMsgid");
    var uNamePattern = /^([A-Za-z0-9\_])\w+/;

    if (uName.value === "") {
        uNameErrorMsg.innerHTML = "Please enter the User Name";
        uNameErrorMsg.style.color = "red";
        return false;
    }
    if (!uName.value.match(uNamePattern)) {
        uNameErrorMsg.innerHTML = "Name is Not Valid You can't add spaces and symbols only you can add A-Z and a-z and 0-9 and _ only";
        uNameErrorMsg.style.color = "red";
        return false;
    }
    uNameErrorMsg.innerHTML = "Username is valid"
    uNameErrorMsg.style.color = "green"
    return true

}

function emailValidation() {

    var email = document.getElementById("emailid");
    var emailErrorMsg = document.getElementById("emailErrorMsgid");
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (email.value === "") {
        emailErrorMsg.innerHTML = "Please enter the E-mail";
        emailErrorMsg.style.color = "red";
        return false;
    }
    if (!email.value.match(emailPattern)) {
        emailErrorMsg.innerHTML = "E-mail is not valid"
        emailErrorMsg.style.color = "red";
        return false;
    }
    emailErrorMsg.innerHTML = "E-mail is valid";
    emailErrorMsg.style.color = "green";
    return true;

}

function passwordValidation() {
    var password = document.getElementById("passwordid");
    var passwordError = document.getElementById("passwordErrorMsgid");
    var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

    if (password.value === "") {
        passwordError.innerHTML = "Please enter the password";
        passwordError.style.color = "red";
        return false;
    }
    if (!password.value.match(passwordPattern)) {
        passwordError.innerHTML = "8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
        passwordError.style.color = "red";
        return false;
    }
    passwordError.innerHTML = "Password is valid";
    passwordError.style.color = "green";
    return true;
}

function confirmPasswordValidation() {
    var password = document.getElementById("passwordid");
    var conPassword = document.getElementById("conPasswordid");
    var conPasswordError = document.getElementById("confirmPasswordErrorMsgid");

    if (conPassword.value === "") {
        conPasswordError.innerHTML = "Please enter the password";
        conPasswordError.style.color = "red";
    } else {
        if (password.value === conPassword.value) {
            conPasswordError.innerHTML = "Password CORRECT";
            conPasswordError.style.color = "green";
        } else {
            conPasswordError.innerHTML = "Password INCORRECT";
            conPasswordError.style.color = "red";
        }
    }
}
