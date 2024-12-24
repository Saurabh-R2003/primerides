<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "primerides");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $carid = mysqli_real_escape_string($conn, $_POST['carid']);
    $carname = mysqli_real_escape_string($conn, $_POST['carname']);
    $typeofcar = mysqli_real_escape_string($conn, $_POST['typeofcar']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $features = mysqli_real_escape_string($conn, $_POST['features']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Colors
    $color1 = mysqli_real_escape_string($conn, $_POST['color1']);
    $color2 = mysqli_real_escape_string($conn, $_POST['color2']);
    $color3 = mysqli_real_escape_string($conn, $_POST['color3']);
    $color4 = mysqli_real_escape_string($conn, $_POST['color4']);
    $color5 = mysqli_real_escape_string($conn, $_POST['color5']);
    $color6 = mysqli_real_escape_string($conn, $_POST['color6']);

    // Handle file uploads
    $target_dir = "uploads/";
    $img1 = basename($_FILES["img1"]["name"]);
    $target_file1 = $target_dir . $img1;
    move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1);

    $img2 = basename($_FILES["img2"]["name"]);
    $target_file2 = $target_dir . $img2;
    move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2);

    $img3 = basename($_FILES["img3"]["name"]);
    $target_file3 = $target_dir . $img3;
    move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3);

    $query = "INSERT INTO `car-details` (carid, carname,tag, price, features,description, img1, img2, img3, color1, color2, color3, color4, color5, color6)
              VALUES ('$carid', '$carname', '$typeofcar', '$price', '$features', '$description', '$img1', '$img2', '$img3', '$color1', '$color2', '$color3', '$color4', '$color5', '$color6')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Record successfully inserted";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Car Details</title>
</head>
<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $_SESSION['message'] . "');</script>";
        unset($_SESSION['message']);
    }
    ?>
    <form action="upload.php" method="post" id="form" enctype="multipart/form-data">
        <label>Car id (numbers):</label>
        <input type="text" name="carid" id="carid"><br><br>

        <label>Car Name:</label>
        <input type="text" name="carname" id="carname"><br><br>

        <label for="cars">Choose a car type:</label>
        <select name="typeofcar" id="typeofcar">
            <option value="Sports">Sports</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="Luxury">Luxury</option>
        </select><br><br>

        <label>Price (in dollars):</label>
        <input type="text" name="price" id="price"><br><br>

        <label>Features:</label>
        <input type="text" name="features" id="features"><br><br>

        <label>Car Description:</label>
        <input type="text" name="description" id="description"><br><br>

        <!-- <label>Image 1:</label>
        <input type="file" name="img1" id="img1"><br><br>

        <label>Image 2:</label>
        <input type="file" name="img2" id="img2"><br><br>

        <label>Image 3:</label>
        <input type="file" name="img3" id="img3"><br><br> -->
        <h3>Image 1</h3>
        <label class="custum-file-upload" for="img1" >
        <div class="icon" id="uploadimg1">
         <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" ><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
         <span class="text">Click to upload image</span>
        </div>
        <!-- <input type="file" id="file"> -->
        <input type="file" name="img1" id="img1" onchange="previewImage(event, 'preview1','uploadimg1')"><br><br>
        <img id="preview1" class="preview" style="display:none;"><br><br>
        </label>

        
        <h3>Image 2</h3>
        <label class="custum-file-upload" for="img2" >
        <div class="icon" id="uploadimg2">
         <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" ><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
         <span class="text">Click to upload image</span>
        </div>
        <!-- <input type="file" id="file"> -->
        <input type="file" name="img2" id="img2" onchange="previewImage(event, 'preview2','uploadimg2')"><br><br>
        <img id="preview2" class="preview" style="display:none;"><br><br>
        </label>

        
        <h3>Image 3</h3>
        <label class="custum-file-upload" for="img3" >
        <div class="icon" id="uploadimg3">
         <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" ><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
         <span class="text">Click to upload image</span>
        </div>
        <!-- <input type="file" id="file"> -->
        <input type="file" name="img3" id="img3" onchange="previewImage(event, 'preview3','uploadimg3')"><br><br>
        <img id="preview3" class="preview" style="display:none;"><br><br>
        </label>
        </div>

        <!-- Color Inputs -->
        <!-- <label>Color 1 (Hex Code):</label>
        <input type="text" name="color1" id="color1"><br><br>

        <label>Color 2 (Hex Code):</label>
        <input type="text" name="color2" id="color2"><br><br>

        <label>Color 3 (Hex Code):</label>
        <input type="text" name="color3" id="color3"><br><br>

        <label>Color 4 (Hex Code):</label>
        <input type="text" name="color4" id="color4"><br><br>

        <label>Color 5 (Hex Code):</label>
        <input type="text" name="color5" id="color5"><br><br>

        <label>Color 6 (Hex Code):</label>
        <input type="text" name="color6" id="color6"><br><br> -->
        <label>Color 1 (Hex Code):</label>
    <input type="color" name="color1" id="color1" onchange="updateColorBox('color1', 'box1')"><br><br>
    <div id="box1" class="color-box"></div><br><br>

    <label>Color 2 (Hex Code):</label>
    <input type="color" name="color2" id="color2" onchange="updateColorBox('color2', 'box2')"><br><br>
    <div id="box2" class="color-box"></div><br><br>

    <label>Color 3 (Hex Code):</label>
    <input type="color" name="color3" id="color3" onchange="updateColorBox('color3', 'box3')"><br><br>
    <div id="box3" class="color-box"></div><br><br>

    <label>Color 4 (Hex Code):</label>
    <input type="color" name="color4" id="color4" onchange="updateColorBox('color4', 'box4')"><br><br>
    <div id="box4" class="color-box"></div><br><br>

    <label>Color 5 (Hex Code):</label>
    <input type="color" name="color5" id="color5" onchange="updateColorBox('color5', 'box5')"><br><br>
    <div id="box5" class="color-box"></div><br><br>

    <label>Color 6 (Hex Code):</label>
    <input type="color" name="color6" id="color6" onchange="updateColorBox('color6', 'box6')"><br><br>
    <div id="box6" class="color-box"></div><br><br>

    <script>
        function updateColorBox(colorInputId, boxId) {
            var color = document.getElementById(colorInputId).value;
            document.getElementById(boxId).style.backgroundColor = color;
        }
    </script>

        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>
