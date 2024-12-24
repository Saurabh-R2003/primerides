<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Collection</title>
    <link rel="stylesheet" href="css/collection.css">
</head>
<?php include("includes/header.php"); ?>
<body>
<main class="collection">
    <div class="colcontainer">
        <div class="collections">
            <h2>COLLECTIONS</h2>
            <div class="slider-wrapper">
            <button class="colbutton left" onclick="slideLeft()">&#9664;</button>
                <div class="slider" id="brandSlider">
                    <div class="item" onclick="filterCars('Brand1')">Brand 1</div>
                    <div class="item" onclick="filterCars('Brand2')">Brand 2</div>
                    <div class="item" onclick="filterCars('Brand3')">Brand 3</div>
                    <div class="item" onclick="filterCars('Brand4')">Brand 4</div>
                    <div class="item" onclick="filterCars('Brand5')">Brand 5</div>
                    <div class="item" onclick="filterCars('Brand6')">Brand 6</div>
                </div>
                <button class="colbutton right" onclick="slideRight()">&#9654;</button>    
            </div>
        </div>
        <div class="collogos">
    <div class="collogo-slide">
        <!-- <img src="img/logos/bmw.svg" alt="">
        <img src="img/logos/ferrari.svg" alt="">
        <img src="img/logos/lamborghini.svg" alt="">
        <img src="img/logos/rolls.svg" alt="">
        <img src="img/logos/porsche.svg" alt="">
        <img src="img/logos/mercedes.svg" alt="">
        <img id="bugatti" src="img/logos/bu.svg" alt=""> -->
        <p class="infitxt">PRIME RIDES</p>
        <p class="infitxt">PRIME RIDES</p>
        <p class="infitxt">PRIME RIDES</p>
        <p class="infitxt">PRIME RIDES</p>
        <p class="infitxt">PRIME RIDES</p>
        <p class="infitxt">PRIME RIDES</p>
      
    </div>
    <!-- <div class="collogo-slide">
        <img src="img/logos/bmw.svg" alt="">
        <img src="img/logos/ferrari.svg" alt="">
        <img src="img/logos/lamborghini.svg" alt="">
        <img src="img/logos/rolls.svg" alt="">
        <img src="img/logos/porsche.svg" alt="">
        <img src="img/logos/mercedes.svg" alt="">
        <img id="bugatti" src="img/logos/bu.svg" alt="">
    </div> -->
    </div>

        <div class="grid" id="carGrid">
            <!-- Cars will be displayed here -->
        </div>
    </div>
    
    <script src="includes/collection.js"></script>
</main>
</body>

</html>
<?php include("includes/footer.php"); ?>