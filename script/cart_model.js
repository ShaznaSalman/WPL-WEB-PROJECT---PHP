// Get references to form elements
var deliverYes = document.getElementById("deliveryes");
var deliverNo = document.getElementById("deliverno");
var address = document.getElementById("address");
var city = document.getElementById("city");
var country = document.getElementById("country");
var confirmDetButton = document.getElementById("confirmDet");
var validationMessage = document.getElementById("validationMessage");

// Add event listeners for input changes
deliverYes.addEventListener("change", checkFormValidity);
deliverNo.addEventListener("change", checkFormValidity);
address.addEventListener("input", checkFormValidity);
city.addEventListener("input", checkFormValidity);
country.addEventListener("input", checkFormValidity);

// Function to update the validation message
function updateValidationMessage(message, valid) {
   validationMessage.textContent = message;
   if (valid) {
      validationMessage.classList.remove("error");
   } else {
      validationMessage.classList.add("error");
   }
}

// Function to check if all required fields are filled
function checkFormValidity() {
  
     
   if (deliverYes.checked && address.value && city.value && country.value) {
      confirmDetButton.disabled = false; // Enable the button
      updateValidationMessage("All required fields are filled.", true);
   } 
   else if(deliverNo.checked)
   {
      confirmDetButton.disabled = false; // Enable the button
      updateValidationMessage("All required fields are filled.", true);
   }
   else {
      confirmDetButton.disabled = true; // Disable the button
      updateValidationMessage("Please fill in all required fields.", false);
   }
}

// Trigger a change event on the deliverYes checkbox to initialize the form validation


document.addEventListener("DOMContentLoaded", function() {
   var transferButton = document.querySelector("#confirmDet");
   var targetForm = document.querySelector("#targetForm");

   transferButton.addEventListener("click", function() {
      var address = document.querySelector(".address").value;
      var city = document.querySelector(".city").value;
      var country = document.querySelector(".country").value;

      // Set the values in the targetForm
      document.querySelector("#targetAddress").textContent = "\n" + address + "\n" + city + "\n" + country;

      // Submit the targetForm
      targetForm.click();
   });
});

const rdbbox = document.querySelectorAll('input[name="deliver"]');
const deliveryform = document.querySelector('.deliveryform');
const deliverOrdersummary = document.querySelector('.deliverOrdersummary');
const Ordersummary = document.querySelector('.Ordersummary');


rdbbox.forEach(radioButton => {
   radioButton.addEventListener('change', function() {
      if (radioButton.value === 'yes') {
         deliveryform.style.display = 'block';
         deliverOrdersummary.style.display = 'block';
         Ordersummary.style.display = 'none';


      } else if (radioButton.value === 'no') {
         deliveryform.style.display = 'none';
         deliverOrdersummary.style.display = 'none';
         Ordersummary.style.display = 'block';
      }
   });
});

document.addEventListener("DOMContentLoaded", function() {

   var fullname = document.getElementById("fullname");
   var mobileNumber = document.getElementById("mobileNumber");
   var email = document.getElementById("email");
   var resettButton = document.getElementById("resettButton");

   /*retrieveForm.addEventListener("submit", function(event) {

         userTextbox.value = "<!-?php echo $user; ?>";
         getPassTextbox.value = "<!?php echo $getPass; ?>";
     });*/

   resettButton.addEventListener("click", function() {
      fullname.value = "";
      email.value = "";
      mobileNumber.value = "";
   });
});

/*var passedValue = "<?php echo htmlspecialchars($passedValue); ?>";
var subTotD = document.getElementById("subTotD");
var subTotC = document.getElementById("subTotC");

if (passedValue) {
   subTotD.textContent = "Rs. " + passedValue;
   subTotC.textContent = "Rs. " + passedValue;
}*/


   // Assuming you have these span elements with unique IDs
   var fnSpan = document.getElementById("fn");
var emSpan = document.getElementById("em");
var mnSpan = document.getElementById("mn");
var targetAddressSpan = document.getElementById("targetAddress");
var detASpan = document.getElementById("detA");
var subTotDSpan = document.getElementById("subTotD");
var deliverySpan = document.getElementById("delivery");
var grandTotalSpan = document.getElementById("grandTotal");

// Construct the data object to send
var data = {
   fullname: fnSpan.textContent,
   email: emSpan.textContent,
   mobileNumber: mnSpan.textContent,
   deliveryAddress: targetAddressSpan.textContent,
   itemsOrdered: detASpan.textContent,
   subTotal: subTotDSpan.textContent,
   deliveryCost: deliverySpan.textContent,
   grandTotal: grandTotalSpan.textContent
};

// Send the data to your PHP script
fetch('invoice.php', {
      method: 'POST',
      headers: {
         'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
   })
   .then(response => response.text())
   .then(result => {
      console.log(result); // You can handle the result as needed
   })
   .catch(error => {
      console.error('Error:', error);
   });


   document.getElementById('whatsapp-link').addEventListener('click', function() {
var fullName = encodeURIComponent(document.getElementById('fn').innerText);
var email = encodeURIComponent(document.getElementById('em').innerText);
var mobileNumber = encodeURIComponent(document.getElementById('mn').innerText);
var deliveryAddress = encodeURIComponent(document.getElementById('targetAddress').innerText);
var itemsOrdered = encodeURIComponent(document.getElementById('detA').innerText);
var subtotal = encodeURIComponent(document.getElementById('subTotD').innerText);
var total = encodeURIComponent(document.getElementById('subTotC').innerText);
var deliveryCost = encodeURIComponent(document.getElementById('delivery').innerText);
var grandTotal = encodeURIComponent(document.getElementById('grandTotal').innerText);

// Check if delivery is selected
var radioButtonYes = document.querySelector('input[name="deliver"][value="yes"]');
var deliverySelected = radioButtonYes && radioButtonYes.checked;

// Construct the message based on the delivery selection
var message = `Order Summary%0AFull Name: ${fullName}%0AEmail: ${email}%0AMobile Number: ${mobileNumber}`;

if (deliverySelected) {
  message += `%0ADelivery Address: ${deliveryAddress}%0AItems Ordered: ${itemsOrdered}%0ASubtotal: ${subtotal}%0ADelivery Cost: ${deliveryCost}%0AGrand Total: ${grandTotal}`;

}
else
{
message +=`Grand Total : ${total}`;
}


var whatsappURL = `https://wa.me/+94727965292?text=${message}`;

// Open WhatsApp link in a new tab/window
window.open(whatsappURL, '_blank');
});


// Function to show the message
function showMessage(messageL) {
   var messageContainerL = document.getElementById("messageContainerL");
   var messageTextL = document.getElementById("messageTextL");

   messageTextL.textContent = messageL;
   messageContainerL.style.display = "block";

   // Hide the message after 2 seconds 
   setTimeout(hideMessage, 2000);
}

// Function to hide the message
function hideMessage() {
   var messageContainerL = document.getElementById("messageContainerL");
   messageContainerL.style.display = "none";
}
var confirmDetButton = document.getElementById("confirmDet");

// Add click event listener to the confirm button
confirmDetButton.addEventListener("click", function() {
   if (!confirmDetButton.disabled) {

      showMessage("Order confirmed successfully!");
   }
});




