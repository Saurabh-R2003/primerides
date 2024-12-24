<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>

</head>

<body>
    <div class="head">
        <h4>PRIME RIDES</h4>
    </div>
    <div class="hnavi" id="hnavi">
        <ul class="homemenu">
            <a href="/primerides/index.php">
                <li>Home</li>
            </a>
            <a href="/primerides/collection.php">
                <li>Collections</li>
            </a>
            <a href="/primerides/aboutus.php">
                <li>About</li>
            </a>
            <a href="/primerides/contactus.php">
                <li>Contact</li>
            </a>
        </ul>
        <?php  
  if(!isset($_SESSION['login_method'])) {	
  ?>
        <div class="login">
            <button id="loginBtn">LOGIN</button>
        </div>
        <?php 
  } else { 
    if (!isset($_SESSION['name']) || !isset($_SESSION['email']) ) {
      echo "Error: User information is not available. Please log in again.";
      exit;
  }
      $email = $_SESSION['email'];
      $name = $_SESSION['name'];
      $acc = $_SESSION['accinfo'];
      $pic = $_SESSION['pic'];
  ?>

        <div class="hdropdown" id="hdropdown">
            <div class="img-box">
                <img src="/primerides/img/defaultprofile.jpg" data-src="<?php echo $pic ?>" alt="Profile Picture" loading="lazy" class="profile-pic" />

            </div>
            <div class="hdropdown-content" id="dropdown-content">
                <a href="/primerides/includes/tempprofile.php">
                    <span class="material-symbols-outlined">person</span>
                    <span class="dropitem">Profile</span>
                </a>
                <a href="/primerides/mybookings.php">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <span class="dropitem">My bookings</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">contact_support</span>
                    <span class="dropitem">My Queries</span>
                </a>
                <a href="/primerides/logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="dropitem">Logout</span>
                </a>
            </div>
        </div>

        <?php 
  } 
  ?>
    </div>
    <div id="myModal2" class="modal2">
        <div class="modal-content2">
            <div id="loginFormContainer">
            </div>
        </div>
    </div>
    <script>
    document.getElementById('loginBtn').onclick = function() {
        var modal = document.getElementById("myModal2");
        var loginFormContainer = document.getElementById("loginFormContainer");

        fetch('login.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                loginFormContainer.innerHTML = data;
                modal.style.display = "block";

                // Add event listener for the close button in the form container
                document.getElementById('formCloseBtn').onclick = function() {
                    modal.style.display = "none";
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    };
    </script>

    <script type="text/javascript">
    var lastScrollTop = 50;
    var navbar = document.getElementById("hnavi");

    window.addEventListener("scroll", function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.top = "-100px";
        } else {
            navbar.style.top = "50px";
        }
        lastScrollTop = scrollTop;
    });
    </script>

</body>

</html>