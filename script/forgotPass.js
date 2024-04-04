document.addEventListener("DOMContentLoaded", function() {
    var retrieveForm = document.getElementById("retrieveForm");
    var userTextbox = document.getElementById("user");
    var getPassTextbox = document.getElementById("getPass");
    var forgotEmail = document.getElementById("forgotEmail");


    retrieveForm.addEventListener("submit", function(event) {
        // Prevent the form from submitting

        userTextbox.value = "<?php echo $user; ?>";
        getPassTextbox.value = "<?php echo $getPass; ?>";
    });

    var resetButton = document.getElementById("resetButton");
    resetButton.addEventListener("click", function() {
        userTextbox.value = "";
        getPassTextbox.value = "";
        forgotEmail.value = "";
    });
});