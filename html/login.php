<?php
session_start();
$error = "";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
$error_msg = "";
if (!empty($error)) {
    $error_msg = "<span class='error-msg'>$error</span>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css" />
    <title>Document</title>
</head>
<body>


<div class="login-form" id="login-formm">
    <a href=""><div class="close-btn">×</div></a>
    
    <form action="login_validation.php" id="login-form" class="form-container" method="POST" >
 
        <div class="namelogo">
            <h1 class="company-name">Ethio Tour</h1>
        </div>
        <input type="hidden" class="inp" name="username" value="<?php echo false;?>" >
        <h1>A few steps away from your unforgettable trip</h1>
        <h3 class="welcome">Welcome back, please login to your account</h3>
        <label for="email">Email</label>
        <div class="inp">
            <input type="text" class="inp" name="email" id="email" placeholder=""  onkeyup="sub()"  />
            <div id="error"></div>
        </div>
        <label for="password">Password</label>
        <div class="inp">
            <input type="password" name="password" id="password" placeholder="your password here"   />
            <div id="error1"></div>
        </div>
         <?php if (!empty($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
        <span><a href="#">Forgot password?</a></span>    
        <div id="succes"></div>
        <button class="login-button" name="submit" id="loggin">Login</button>
        <span class="signup-link">Don't have an account? <a href="../html/sign.php">Sign up</a></span>
    </form>
</div>
<!-- <script src="preventDefault.js"></script> -->
<script>

// function sub(){
//     valid=false;
//     len=document.getElementByClass('inp').value;
//     if(len.lenght===0){
//         valid=false;
//         return false;
//     }

// }
<!-- </script> 
</body>
</html>


<!-- <link rel="stylesheet"?> -->
<!-- <link rel="stylesheet" href="../css/sign up.css" /> -->


