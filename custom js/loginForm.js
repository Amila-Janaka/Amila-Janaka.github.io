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
    var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;

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