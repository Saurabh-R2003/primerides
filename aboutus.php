<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <script lang="javascript" src="includes/login.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <?php include("includes/header.php");?>
    <div class="abthero">
    
    <div class="abttitle" id="abttitle"><p>PRIME RIDES</p></div>
    <div class="abtinfo" id="abtinfo">
        <p id="row1">we redefine the experience of automotive indulgence, offering an</p><br>
        <p id="row2">exquisite fleet of the world's mostprestigious automobiles for </p>
        <p id="row3">those with discerning tastes and a penchant for elegance. </p><br>
        <p id="row4"> Prime Rides transforms mere transportation into  </p>
        <p id="row5">an unforgettable voyage of luxury and prestige. </p>
    </div>
  </div>
  <div class="moreinfo">
    <div class="cont">
    <h2>Our Story</h2>
    <p>Founded with a passion for high-end automobiles, our luxury car rental service offers a carefully curated fleet of premium vehicles. Our growth is driven by a commitment to excellence and exceptional customer experiences. Today, we provide a range of the world's most prestigious cars for unforgettable journeys.</p>

  </div>
  <div class="img">
    <img src="img/logos/mclarenabt.png">
  </div>
   
</div>

<div class="moreinfor">
<div class="imgr">
    <img src="img/logos/lambo1.png">
  </div>
    <div class="cont">
    <h2>Our Fleet</h2>
    <p>Our fleet features an array of luxury and high-performance vehicles, including Ferraris, Lamborghinis, Rolls-Royces, and Bentleys. Each car is meticulously maintained to deliver the ultimate driving experience. Enjoy style and performance for every occasion with our top-tier collection.</p>

  </div>
 
   
</div>

<div class="moreinfo">
    <div class="cont">
    <h2>Our Commitment</h2>
    <p>We prioritize customer satisfaction, understanding that renting a luxury car is about creating memorable experiences. Our dedicated team offers personalized service to ensure a seamless rental process. Attention to detail and client needs are at the heart of our commitment.</p>

  </div>
  <div class="img">
    <img src="img/logos/mclarenabt.png">
  </div>
   
</div>

<div class="moreinfol">
<div class="imgr">
    <img src="img/logos/lambo1.png">
  </div>
    <div class="cont">
    <h2>Our Vision</h2>
    <p>We aim to be the premier luxury car rental service, known for exceptional vehicles and outstanding customer care. Our vision includes expanding our fleet with the latest models and continually enhancing our services. We strive to redefine luxury car rentals with innovation and excellence.</p>

  </div>
 
   
</div>


<div id="myModal2" class="modal2">
    <div class="modal-content2">
        <!-- <span class="close">&times;</span> -->
        <div id="loginFormContainer">
            <!-- Login form will be loaded here -->
        </div>
    </div>
</div>
   <script>

   const title =new SplitType("#abttitle");
   const info =new SplitType("#abtinfo")

gsap.to('.abttitle .char',{
    y:0,
    // stagger:0.02,
    delay:0,
    duration:.1
},)

gsap.to('#row1 .char',{
    y:0,
    // stagger:0.004,
    delay:0.4,
    duration:1,
},)
gsap.to('#row2 .char',{
    y:0,
    // stagger:0.004,
    delay:0.5,
    duration:1,
},)
gsap.to('#row3 .char',{
    y:0,
    // stagger:0.004,
    delay:0.6,
    duration:1,
},)

gsap.to('#row4 .char',{
    y:0,
    // stagger:0.004,
    delay:0.7,
    duration:1,
},)
gsap.to('#row5 .char',{
    y:0,
    // stagger:0.004,
    delay:0.8,
    duration:1,
},)




</script>

<script>
let end= document.getElementsByClassName("end")[0];
// let sidebar_content=document.ge

window.onscroll= () =>{
let scrollTop=window.scrollY;
let viewportHeight=window.innerHeight;
let contentHeight=end.getBoundingClientRect().height;
if(scrollTop >= contentHeight-viewportHeight){
   end.style.position="fixed";
}
else{
    end.style.position="";
}
}
</script>
<?php include("includes/footer.php");?>
</body>
</html>