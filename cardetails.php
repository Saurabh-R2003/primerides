<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="css/cardetails.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/header.css">
  <meta charset="utf-8">
  <title>Data</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "primerides");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$carid = 123; 

$q = "SELECT * FROM `car-details` WHERE carid=$carid";
$result = mysqli_query($conn, $q);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $carname = htmlentities($row["carname"]);
    $cartag = htmlentities($row["tag"]);
    $price = htmlentities($row["price"]);
    $features = htmlentities($row["features"]);
    $des = htmlentities($row["description"]);

    $img1 = htmlentities($row["img1"]);
    $imgPath1 = "admin/uploads/" . $img1;

    $img2 = htmlentities($row["img2"]);
    $imgPath2 = "admin/uploads/" . $img2;

    $img3 = htmlentities($row["img3"]);
    $imgPath3 = "admin/uploads/" . $img3;

    $colors = [];
    for ($i = 1; $i <= 6; $i++) {
        $colorKey = "color" . $i;
        if (!empty($row[$colorKey])) {
            $colors[] = htmlentities($row[$colorKey]);
        }
    }
} else {
    echo "No data found for carid=$carid";
}

mysqli_close($conn);
?>

<div class="upper">
  <div class="car-images">
    <div class="car-bg">
      <img id="mainImage" src="<?php echo $imgPath1; ?>" width="800" height="460">
    </div>
    <div class="side-img">
      <div class="radio-wrapper">
        <input type="radio" id="radio1" name="sideimg" value="<?php echo $imgPath1; ?>" checked>
        <label for="radio1">
          <img src="<?php echo $imgPath1; ?>" alt="Car 1">
        </label>
      </div>
      <div class="radio-wrapper">
        <input type="radio" id="radio2" name="sideimg" value="<?php echo $imgPath2; ?>">
        <label for="radio2">
          <img src="<?php echo $imgPath2; ?>" alt="Car 2">
        </label>
      </div>
      <div class="radio-wrapper">
        <input type="radio" id="radio3" name="sideimg" value="<?php echo $imgPath3; ?>">
        <label for="radio3">
          <img src="<?php echo $imgPath3; ?>" alt="Car 3">
        </label>
      </div>
    </div>
  </div>
  <div class="info">
    <div class="tag"><?php echo $cartag; ?></div>
    <div class="carname" id="carname"><?php echo $carname; ?></div>
    <div class="price"><h5>Available for rent at</h5> <h3>$<?php echo $price; ?></h3> <p>/Per day</p></div>
    <div class="rentnow"><a href="#radio3"><button>RENT</button></a></div>
    <div class="color">
      <h2>Exterior color</h2>
      <div class="color-picker">
        <?php foreach ($colors as $color): ?>
          <label class="color-option" title="<?php echo $color; ?>">
            <input type="radio" name="color" value="<?php echo $color; ?>">
            <span class="color-swatch" style="background-color:<?php echo $color; ?>; border: 1px solid <?php echo $color; ?>;"></span>
          </label>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<div class="logos" id="logos">
    <div class="logo-slide">
      <h1></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    <div class="logo-slide">
    <h1><?php echo $carname; ?></h1>
    </div>
    </div>
<div class="lower" id="lower">
<div class="moreinfo">
<div class="features">
<h1>Features</h1>
<p><?php echo $features; ?></p>
</div>
<div class="des">
<h1>About - <?php echo $carname; ?></h1>
<p><?php echo $des; ?></p>
</div>
</div>
<div class="book" id="book">
  <div class="strip">
    <h3>RENT VEHICLE</h3>
    </div>
    <form method="POST" action="">
        <label for="from_date">From Date</label>
        <input type="date" id="from_date" name="from_date" required>

        <label for="to_date">To Date</label>
        <input type="date" id="to_date" name="to_date" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <button type="submit">BOOK NOW</button>
    </form>

</div>
</div>

<!-- Modal Dialog -->
<div id="myModal" class="modal">
  <!-- <span class="close">&times;</span> -->
  <img class="modal-content" id="imgmain">
</div>

<script>
  document.querySelectorAll('input[name="sideimg"]').forEach(radio => {
    radio.addEventListener('change', function() {
      document.getElementById('mainImage').src = this.value;
    });
  });

  var modal = document.getElementById("myModal");
  var img = document.getElementById("mainImage");
  var modalImg = document.getElementById("imgmain");

  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

<?php include("includes/footer.php"); ?>

</body>
</html>
