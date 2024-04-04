<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Slider</title>
    <style>
        .slider-container {
            width: 100%;
            height: 300px;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 100px;
        }

        .slider {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeInOut 200s infinite;
        }

        .slide {
            display: none;
            width: 100%;
            height: 100%;
        }

        img {
            width: 100%;
            height: 100%;
            
        }

        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0;
            }

            10%,
            90% {
                opacity: 1;
            }
        }

        @media only screen and (min-width: 700px) {
            .slider-container {
                justify-content: flex-start;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="images/advertistments/Adver4.jpg" alt="Advertisement 1">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver15.jpg" alt="Advertisement 2">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver3.jpg" alt="Advertisement 3">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver8.jpg" alt="Advertisement 3">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver5.jpg" alt="Advertisement 3">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver10.jpg" alt="Advertisement 7">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver6.jpg" alt="Advertisement 7">
            </div>
            <div class="slide">
                <img src="images/advertistments/Adver14.jpg" alt="Advertisement 7">
            </div>
        </div>
    </div>

    <script src="script/ad1.js"></script>

</body>

</html>