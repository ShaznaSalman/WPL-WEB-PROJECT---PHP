<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      .message-container {
         position: fixed;
         bottom: 25px;
         left: 50%;
         transform: translate(-50%, -50%);
         background-color: rgba(0, 0, 0, 0.8);
         color: white;
         padding: 10px 20px;
         border-radius: 5px;
         display: none;
         z-index: 999;
      }

      .message {
         font-size: 18px;
      }
   </style>
</head>

<body>
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="staticBackdropLabel">YOUR CART</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="cart_model.php" method="post">
               <div class="modal-body">
                  <table class="show-cart table">

                  </table>
                  <div class="grand-total">Total price: Rs<span class="total-cart" id="totalFullPass"></span></div>
               </div>
               <div class="modal-footer">


                  <!-- Inside your modal's modal-footer -->
                  <button type="button" class="btn btn-warning add-db" id="sendValue">CHECKOUT</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

               </div>

            </form>
         </div>
      </div>
   </div>
   <div class="message-container">
      <div class="message">Item added to cart</div>
   </div>
   <script>
      document.getElementById("sendValue").addEventListener("click", function() {
         //var valueA = document.getElementById("totalFullPass").textContent;
         //window.location.href = "cart_model.php?valueA=" + encodeURIComponent(valueA);
         
         var totalCartElement = document.getElementById("totalFullPass");

         // Get the text content of the element
         var totalCartValue = totalCartElement.textContent;

         // Save the value to local storage
         localStorage.setItem("totalCartValue", totalCartValue)


         var loggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>;

         if (loggedIn) {
            var totalCartValueFromStorage = localStorage.getItem("totalCartValue");

// Redirect to the target page with the value as a query parameter
            window.location.href = 'cart_model.php?totalCartValue=' + encodeURIComponent(totalCartValueFromStorage);
            
         } else {
            // User is not logged in, redirect to login page
            window.location.href = "login.php";
         }
      });
   </script>
</body>

</html>