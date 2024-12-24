<?php
session_start();
require_once '../vendor/autoload.php';

// Init configuration
$clientID = '329190451130-6l11d1nltgja9ri5dtbd1oap8nfqdg69.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/primerides/login.php'; // Ensure this matches your Google OAuth settings

// Create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// Authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // Get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;
    $picture = $google_account_info->picture;

    $_SESSION['accinfo']=$google_account_info;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['pic']= $picture;
    $_SESSION['login_method'] = 'google';
 ?>
<?php 
   header("Location: index.php"); 
   exit();
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register</title>
</head>
<body>
<div class="form-container">
    <!-- <span class="close-button" id="formCloseBtn">&times;</span> -->
    <p class="logintitle">PRIME RIDES</p>
    <form class="form">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="">
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="">
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="">
            
        </div>
        <button type="submit" class="sign" id="sign" name="sign">Sign in</button>
    </form>
    <div class="social-message">
        <div class="uline"></div>
        <p class="message">Login with Google</p>
        <div class="uline"></div>
    </div>
    <div class="social-icons">
        <a href="<?php echo $client->createAuthUrl()?>" class="gsign" id="gsign" name="gsign">
            <button aria-label="Log in with Google" class="icon">
                <img src="img/logos/google-icon.svg" width="30px" height="30px">
            </button>
        </a>
    </div>
    <p class="signup">Don't have an account?
    <a rel="noopener noreferrer" id="signupLink" href="">Sign up</a>
    </p>
</div>


</body>
</html>
<?php
}
?> 


