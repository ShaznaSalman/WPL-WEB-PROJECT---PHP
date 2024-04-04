var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length == 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

document.getElementById("email").addEventListener("keyup", function() {
    const emailInput = this.value;
    const emailMessage = document.getElementById("emailMessage");

    if (emailInput.indexOf("@") === -1) {
        emailMessage.textContent = "Please enter '@' for a valid email address.";
        emailMessage.style.color = "red";
    } else if (emailInput.indexOf(".com") === -1) {
        emailMessage.textContent = "Please enter a '.com' for a valid email address";
        emailMessage.style.color = "red";
    } else {
        emailMessage.textContent = ""; // Clear the message if email is valid
    }
});

document.getElementById("mobileNumber").addEventListener("keyup", function() {
    const mobileNumberInput = this.value;
    const mobileNumberMessage = document.getElementById("numMessage");

    if (mobileNumberInput.length !== 10) {
        mobileNumberMessage.textContent = "Please enter a valid 10-digit mobile number.";
        mobileNumberMessage.style.color = "red";
    } else if (isNaN(mobileNumberInput)) {
        mobileNumberMessage.textContent = "Please enter a valid mobile number.";
        mobileNumberMessage.style.color = "red";
    } else {
        mobileNumberMessage.textContent = ""; // Clear the message if mobile number is valid
    }
});

document.getElementById("form").addEventListener("submit", function(event) {
    var password = document.getElementById("psw").value;
    var confirmPassword = document.getElementById("cpsw").value;

    const passwordMessage = document.getElementById("passwordMessage");

    if (password === confirmPassword) {
        passwordMessage.textContent = "Password and confirm password match.";
        passwordMessage.style.color = "green";
    } else {
        passwordMessage.textContent = "Password and confirm password do not match.";
        passwordMessage.style.color = "red";
        event.preventDefault(); // Prevent form submission if passwords don't match
    }

    const agreeCheckbox = document.getElementById("agree").value; // Reference to the "I Agree" checkbox
    const AgreeMessage = document.getElementById("AgreeMessage");

    if (!agreeCheckbox === 1) {
        AgreeMessage.textContent = "Can not proceed further without agreeing to Terms and Conditions ";
        AgreeMessage.style.color = "red";
        event.preventDefault(); // Prevent form submission if checkbox is not ticked
    } else {
        AgreeMessage.textContent = "agreed"; // Clear the message if checkbox is ticked
        AgreeMessage.style.color = "green";
    }

});

document.getElementById("cpws").addEventListener("keyup", function() {
    var password = document.getElementById("psw").value;
    var confirmPassword = document.getElementById("cpsw").value;
    const passwordMessage = document.getElementById("passwordMessage");


    if (password === confirmPassword) {
        passwordMessage.textContent = "Password and confirm password match.";
        passwordMessage.style.color = "green";
    } else {
        passwordMessage.textContent = "Password and confirm password do not match.";
        passwordMessage.style.color = "red";
    }
});