

var shoppingCart = (function () {

  var cartKey = 'shoppingCart_projectXX'; // Change this for each project


    cart = [];

    function Item(name, price, count,image) {
      this.name = name;
      this.price = price;
      this.count = count;
      this.image=image;
    }

    // Save cart
    function saveCart() {
      localStorage.setItem(cartKey, JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
      cart = JSON.parse(localStorage.getItem(cartKey));
    }
    if (localStorage.getItem(cartKey) != null) {
      loadCart();
    }


    var obj = {};

    // Add to cart
    obj.addItemToCart = function (name, price, count,image) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart[item].count++;
          saveCart();
          return;
        }
      }
      var item = new Item(name, price, count,image);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function (name, count) {
      for (var i in cart) {
        if (cart[i].name === name) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function (name) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart[item].count--;
          if (cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
      }
      saveCart();
    }

    // Remove all items from cart
    obj.removeItemFromCartAll = function (name) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }

    // Clear cart
    obj.clearCart = function () {
      cart = [];
      saveCart();
    }

    // Count cart 
    obj.totalCount = function () {
      var totalCount = 0;
      for (var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }

    // Total cart
    obj.totalCart = function () {
      var totalCart = 0;
      for (var item in cart) {
        totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }

    // List cart
    obj.listCart = function () {
      var cartCopy = [];
      for (i in cart) {
        item = cart[i];
        itemCopy = {};
        for (p in item) {
          itemCopy[p] = item[p];
        }
        itemCopy.total = Number(item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
    return obj;
  })();


  // Add item
  $('.default-btn').click(function (event) {
    // alert('working');
    event.preventDefault();// ensuring that the page doesn't navigate away or refresh when the button is clicked.
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    var image = $(this).data('image');
    shoppingCart.addItemToCart(name, price, 1,image);
    displayCart();

    //add to another page
    // AJAX request to send data to another PHP page
    /*$.ajax({
        type: 'POST',
        url: 'another_page.php',
        data: {
            name: name,
            price: price,
            image: image
        },
        success: function(response) {
            console.log(response); // You can handle the response here
        },
        error: function(xhr, status, error) {
            console.error(error); // Handle errors here
        }
    });*/
    
    // Add to cart and display cart as before
    //shoppingCart.addItemToCart(name, price, 1, image); 
    //displayCart();
    showMessage();

    // Hide the message after 2 seconds (2000 milliseconds)
    setTimeout(hideMessage, 2000);
  });
  
  // Function to show the message
  function showMessage() {
    $('.message-container').fadeIn();
  }
  
  // Function to hide the message
  function hideMessage() {
    $('.message-container').fadeOut();
  }


  // Clear items
  $('.clear-cart').click(function () {

    shoppingCart.clearCart();
    displayCart();
  });


  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for (var i in cartArray) {
      output += "<tr>"
        + "<td><img src='" + cartArray[i].image + "' alt='Item Image'></td>"
        + "<td>" + cartArray[i].name + "</td>"
        + "<td>" + cartArray[i].price + "</td>"
        + "<td><div class='input-group'>"
        + "<input type='number' style='width: 70px;' max='20' min='1' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
        + "</div></td>"
        + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
        + " = "
        + "<td>" + cartArray[i].total + "</td>"
        + "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart());
    $('.total-count').html(shoppingCart.totalCount());
  }

  // Delete item button

  $('.show-cart').on("click", ".delete-item", function (event) {
    var name = $(this).data('name')
    shoppingCart.removeItemFromCartAll(name);
    displayCart();
  })

  // Item count input
  $('.show-cart').on("change", ".item-count", function (event) {
    var name = $(this).data('name');
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
  });
  displayCart();

//////// ui script start /////////
// Tabs Single Page
$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
$('.tab ul.tabs li a').on('click', function (g) {
    var tab = $(this).closest('.tab'), 
    index = $(this).closest('li').index();
    tab.find('ul.tabs > li').removeClass('current');
    $(this).closest('li').addClass('current');
    tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
    tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
    g.preventDefault();
});

// search function
$('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('.tab_content').find('.col-lg-3').each(function() {
    var $table = $(this);
    
    if (!($table.find('.featured-item').text().search(patt) >= 0)) {
      $table.not('.featured-item').hide();
    }
    if (($table.find('.col-lg-3').text().search(patt) >= 0)) {
      $(this).show();
      document.getElementById('not_found').style.display = 'none';
    } else {
      document.getElementById("not_found").innerHTML = " Product not found..";
      document.getElementById('not_found').style.display = 'block';
    }
    
});
  
 });

 $('.add-db').click(function () {
  //localStorage.removeItem('totalCartValue');
  var cartArray = shoppingCart.listCart();
  
  // Send AJAX request to insert cart items into the database
  $.post('add_to_database.php', { cartItems: cartArray }, function(response) {

      alert(response); // Display a response from the server
      shoppingCart.clearCart();

     window.location.href="cart_model.php";

  });
});


