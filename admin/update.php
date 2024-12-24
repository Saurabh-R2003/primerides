<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "primerides");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$car = [
    'name' => '',
    'brand' => '',
    'power' => '',
    'description' => '',
    'price' => '',
    'img1' => '',
    'img2' => '',
    'img3' => '',
    'color1' => '',
    'color2' => '',
    'color3' => '',
    'color4' => '',
    'color5' => '',
    'color6' => '',
];

// Fetch the car record if carid is provided
if (isset($_GET['carid'])) {
    $carid = intval($_GET['carid']);
    $sql = "SELECT * FROM cars WHERE id = $carid";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $car = mysqli_fetch_assoc($result);
    } else {
        echo "<p>No car found with ID: $carid</p>";
    }
}

// Update the car record
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['carid'])) {
    $carid = intval($_POST['carid']);
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $power = $_POST['power'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle file uploads
    $img1 = $car['img1'];
    if (isset($_FILES['img1']) && $_FILES['img1']['error'] == UPLOAD_ERR_OK) {
        $img1 = basename($_FILES['img1']['name']);
        move_uploaded_file($_FILES['img1']['tmp_name'], "uploads/$img1");
    }

    $img2 = $car['img2'];
    if (isset($_FILES['img2']) && $_FILES['img2']['error'] == UPLOAD_ERR_OK) {
        $img2 = basename($_FILES['img2']['name']);
        move_uploaded_file($_FILES['img2']['tmp_name'], "uploads/$img2");
    }

    $img3 = $car['img3'];
    if (isset($_FILES['img3']) && $_FILES['img3']['error'] == UPLOAD_ERR_OK) {
        $img3 = basename($_FILES['img3']['name']);
        move_uploaded_file($_FILES['img3']['tmp_name'], "uploads/$img3");
    }

    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];
    $color4 = $_POST['color4'];
    $color5 = $_POST['color5'];
    $color6 = $_POST['color6'];

    $sql = "UPDATE cars SET name='$name', brand='$brand', power='$power', description='$description', price='$price', img1='$img1', img2='$img2', img3='$img3', color1='$color1', color2='$color2', color3='$color3', color4='$color4', color5='$color5', color6='$color6' WHERE id = '$carid' ";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Car</title>
    <style>
        .custom-file-upload {
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
        .icon {
            display: inline-block;
            width: 100px;
            height: 100px;
            background: #f0f0f0;
            text-align: center;
            line-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Update Car</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="carid" value="<?php echo isset($car['id']) ? $car['id'] : ''; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($car['name']); ?>"><br><br>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" value="<?php echo htmlspecialchars($car['brand']); ?>"><br><br>

        <label for="power">Power:</label>
        <input type="text" name="power" value="<?php echo htmlspecialchars($car['power']); ?>"><br><br>

        <label for="description">Description:</label>
        <textarea name="description"><?php echo htmlspecialchars($car['description']); ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo htmlspecialchars($car['price']); ?>"><br><br>

        <h3>Image 1</h3>
        <label class="custom-file-upload" for="img1">
            <div class="icon" id="uploadimg1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                    <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
                <span class="text">Click to upload image</span>
            </div>
            <input type="file" name="img1" id="img1" onchange="previewImage(event, 'preview1','uploadimg1')"><br><br>
        </label>
        <img id="preview1" src="uploads/<?php echo htmlspecialchars($car['img1']); ?>" alt="Image 1" width="100px"><br><br>

        <h3>Image 2</h3>
        <label class="custom-file-upload" for="img2">
            <div class="icon" id="uploadimg2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                    <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
                <span class="text">Click to upload image</span>
            </div>
            <input type="file" name="img2" id="img2" onchange="previewImage(event, 'preview2','uploadimg2')"><br><br>
        </label>
        <img id="preview2" src="uploads/<?php echo htmlspecialchars($car['img2']); ?>" alt="Image 2" width="100px"><br><br>

        <h3>Image 3</h3>
        <label class="custom-file-upload" for="img3">
            <div class="icon" id="uploadimg3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                    <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
                <span class="text">Click to upload image</span>
            </div>
            <input type="file" name="img3" id="img3" onchange="previewImage(event, 'preview3','uploadimg3')"><br><br>
        </label>
        <img id="preview3" src="uploads/<?php echo htmlspecialchars($car['img3']); ?>" alt="Image 3" width="100px"><br><br>

        <label for="color1">Color 1:</label>
        <input type="color" name="color1" value="<?php echo htmlspecialchars($car['color1']); ?>"><br><br>

        <label for="color2">Color 2:</label>
        <input type="color" name="color2" value="<?php echo htmlspecialchars($car['color2']); ?>"><br><br>

        <label for="color3">Color 3:</label>
        <input type="color" name="color3" value="<?php echo htmlspecialchars($car['color3']); ?>"><br><br>

        <label for="color4">Color 4:</label>
        <input type="color" name="color4" value="<?php echo htmlspecialchars($car['color4']); ?>"><br><br>

        <label for="color5">Color 5:</label>
        <input type="color" name="color5" value="<?php echo htmlspecialchars($car['color5']); ?>"><br><br>

        <label for="color6">Color 6:</label>
        <input type="color" name="color6" value="<?php echo htmlspecialchars($car['color6']); ?>"><br><br>

        <button type="submit">Update Car</button>
    </form>

    <script>
        function previewImage(event, previewId, iconId) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById(previewId);
                const icon = document.getElementById(iconId);
                output.src = reader.result;
                icon.style.display = 'none';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
