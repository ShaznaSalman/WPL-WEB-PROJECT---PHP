document.addEventListener("DOMContentLoaded", function() {
  var user = document.getElementById("user");
  var getPass = document.getElementById("getPass");
  var forgotEmail = document.getElementById("forgotEmail");
  var resetButton = document.getElementById("resetButton");

  resetButton.addEventListener("click", function() {
    user.value = "";
    getPass.value = "";
    forgotEmail.value = "";
  });
});
document.addEventListener("DOMContentLoaded", function() {
  
  var fullname = document.getElementById("fullname");
  var mobileNumber = document.getElementById("mobileNumber");
  var email = document.getElementById("email");
  var resettButton = document.getElementById("resettButton");

  resettButton.addEventListener("click", function() {
    fullname.value = "";
    email.value = "";
    mobileNumber.value = "";
  });
});