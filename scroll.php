<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /* styles.css */
#scrollToTopBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: transparent;
    color: white;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 4px;
}
.imgCircle{
    border-radius: 50%;
}



    </style>
</head>
<body>
    <button id="scrollToTopBtn"><img src="images/icons/scroll.jpg" class="imgCircle" alt="" srcset=""></button>


    <script>
        // script.js
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when the user scrolls down 20px from the top of the document
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

// Scroll back to the top when the button is clicked
scrollToTopBtn.addEventListener("click", () => {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});

    </script>
</body>
</html>