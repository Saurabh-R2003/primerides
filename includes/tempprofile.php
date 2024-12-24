<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tempprofile.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/profile.css"> -->
</head>

<body>
    <?php include("header.php"); ?>
    <?php $pic = $_SESSION['pic']; ?>
    <div class="cmainlayout">
        <div class="cmain">
            <div class="profile-container">
                <div class="profile-pic-container">
                
                    <img src="../img/defaultprofile.jpg" data-src="<?php echo $pic ?>" alt="Profile Picture" loading="lazy" class="profile-pic" />
                    <br>
                    <input type="file" id="upload-pic" style="display:none">
                    <button id="change-pic-button">
                    <i class="fa-sharp fa-regular fa-file-pen"></i>
                    </button>
                    <form class="profile-form">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" >
                        
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" >
                        <br>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" >
                        <br>
                        <button type="submit">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="profile.js"></script>
    <?php include("footer.php"); ?>
</body>

</html>