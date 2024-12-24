<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="x-icon" href="#">
    <title>PrimeRides</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/feature.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>


    <!--header-->
    <?php include('includes/header.php');?>
    <main>
        <!--slider-->
        <section>
            <?php include('includes/slider.php');?>
        </section>
        <!--feature cars-->

        <div class="feature-sec">
            <?php include("includes/feature.php") ?>
        </div>
        <script src="includes/feature.js"></script>
           
        <section class="partners">
        <h1>Partnered Brands</h1>
            <div class="logos">
                <div class="logo-slide">
                    <img src="img/logos/bmw.svg" alt="">
                    <img src="img/logos/ferrari.svg" alt="">
                    <img src="img/logos/lamborghini.svg" alt="">
                    <img src="img/logos/rolls.svg" alt="">
                    <img src="img/logos/porsche.svg" alt="">
                    <img src="img/logos/mercedes.svg" alt="">
                    <img id="bugatti" src="img/logos/bu.svg" alt="">

                </div>
                <div class="logo-slide">
                    <img src="img/logos/bmw.svg" alt="">
                    <img src="img/logos/ferrari.svg" alt="">
                    <img src="img/logos/lamborghini.svg" alt="">
                    <img src="img/logos/rolls.svg" alt="">
                    <img src="img/logos/porsche.svg" alt="">
                    <img src="img/logos/mercedes.svg" alt="">
                    <img id="bugatti" src="img/logos/bu.svg" alt="">
                </div>
            </div>
            <h4>Explore the epitome of luxury and performance with our exclusive partnerships, bringing you the finest selection of vehicles from renowned brands worldwide.</h4>
</section>


        <!--facts-->
        <div class="services">
            <section class="fun-facts-section">
                <h1>Our Services</h1>
                <h4>Experience excellence with our premium car rental service, offering unparalleled convenience, luxury, and reliability for your every journey.</h4>
                <div class="services">
                    <div class="c1">
                        <div class="card1">HOVER</div>
                    </div>
                    <div class="c2">
                        <div class="card1">HOVER</div>
                    </div>
                    <div class="c3">
                        <div class="card1">HOVER</div>
                    </div>
                    <div class="c4">
                        <div class="card1">HOVER</div>
                    </div>
                </div>
            </section>
        </div>
        <section id="page-3">
            <div id="review-text">
                <h5 id="rt1">Our Testimonials</h5>
                <h3 id="rt2">What People Say About Us.</h3>
            </div>
            <div id="reviews">
                <div class="rev real-rev" id="rev1">
                    <!-- <div class="rev-img"></div> -->
                    <img src="sanji.jpg" class="rev-img" alt="" />
                    <p>
                        "Unbeatable prices, outstanding assistance, and easy reservation
                        process. We had a remarkable journey!"
                    </p>
                    <h5 style="margin-top: 25px; font-size: 20px">Conor McG</h5>
                    <h6 style="margin-top: 10px; font-size: 14px">Ireland</h6>
                </div>

                <div class="rev real-rev" id="rev2">
                    <!-- <div class="rev-img"></div> -->
                    <img src="luffy.jpg" class="rev-img" alt="" />
                    <p>
                        "Great deals, top-notch customer service, and hassle-free booking.
                        Had an unforgettable trip, thanks to them!"
                    </p>
                    <h5 style="margin-top: 25px; font-size: 20px">Narendra Modi</h5>
                    <h6 style="margin-top: 10px; font-size: 14px">India, Gully</h6>
                </div>

                <div class="rev real-rev" id="rev3">
                    <!-- <div class="rev-img"></div> -->
                    <img src="img/iris (1).jpg " class="rev-img" alt="" />
                    <p>
                        "Amazing offers, exceptional support, and seamless booking. Our
                        vacation was truly memorable !"
                    </p>
                    <h5 style="margin-top: 25px; font-size: 20px">Mike</h5>
                    <h6 style="margin-top: 10px; font-size: 14px">USA, S-F</h6>
                </div>
                <div class="rev" id="rev-bg"></div>
            </div>

            <div id="rev-btn">
                <i class="ri-arrow-right-double-fill" onclick="showNextReview()"></i>
            </div>
        </section>


    </main>
    <script>
    let current = 0;

    function showNextReview() {
        const reviews = document.querySelectorAll(".real-rev");

        reviews.forEach((review) => {
            review.style.display = "none";
        });

        current++;
        if (current >= reviews.length) {
            current = 0;
        }
        reviews[current].style.display = "block";
    }
    </script>
    <!--footer-->
    <?php include('includes/footer.php');?>
    <script src="includes/slider.js"></script>
</body>

</html>