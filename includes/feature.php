<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals Featured Section</title>
    <link rel="stylesheet" href="css/feature.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="featured-section">
        <div class="featured-header">
            <div class="ftitle">
         <h1>Featured Cars</h1>
           <p>Discover the epitome of luxury and performance with our handpicked selection of premium vehicles. Drive your dream car today</p>
            </div>
            <a href="cardetails.php">
            <button type="submit" class="cssbuttons-io-button">
                View all
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                    </svg>
                </div>
            </button>
            </a>
        </div>
        <button class="farrow arrow-left" id="left-arrow" onclick="hello()">
        <i class="fa-solid fa-arrow-left"></i>
        </button>
        <div class="featured-items" id="featured-items">
            <div class="fitem"><a href="#"><img src="img/lambo.jpg">
            <div class="fdetails">
            <h3>Lamborghini hurucan</h3> 
              <h4>$500</h4>
                <p>/Per day</p> 
            </div>
           </a></div>
            <div class="fitem"><a href="#"><img src="img/iris (1).jpg">
            <div class="fdetails">
            <h3>Porsche 911</h3> 
              <h4>$500</h4>
                <p>/Per day</p> 
            </div>
            </a></div>
            <div class="fitem"><a href="#"><img src="img/porsche.jpg">
            <div class="fdetails">
                
            </div>
            </a></div>
            <div class="fitem"><a href="#"><img src="img/Revuelto_Exterior_Beauty_01 (2).jpg">
            <div class="fdetails">
                
            </div>   
            </a></div>
            <div class="fitem"><a href="#"><img src="img/Screenshot 2024-05-26 112718.png">
            <div class="fdetails">
                
            </div>
            </a></div>
            <div class="fitem"><a href="#"><img src="img/Screenshot 2024-05-26 113114.png">
            <div class="fdetails">
                
            </div>
            </a></div>
            <div class="fitem"><a href="#"><img src="img/iris (9).jpg">
            <div class="fdetails">
                
            </div>
            </a></div>
          
        </div>
        <button class="farrow arrow-right" id="right-arrow" onclick="scrollRight()">
        <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <script src="feature.js"></script>
</body>


</html>

