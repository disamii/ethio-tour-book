<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABaSE = 'bookforms';
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
      if(!$conn)
      {
        die(mysqli_error($conn).'error occured'); 
      }
      if(isset($_POST['submit']))
      {
          // $name=mysqli_real_escape_string($conn, $_POST['name']);
                $full_name= $_POST['full-name'];
                $email=$_POST['email'];
                $password=$_POST['password'];
              
                $phone=$_POST['phone-number'];
                  $insertion= "INSERT INTO `registration` (`username`, `password` ,`address`, `phone`)VALUES ('$full_name','$password','$email','$phone')";
                  if(!mysqli_query($conn,$insertion)){
                  die("something went wrong");
                }
else{
  header("Location: index.php");

}
                }
               
?>
<link rel="stylesheet" href="../css/style.css " />
  <!-- <link rel="stylesheet" href="../css/login.css" /> -->
  <link rel="stylesheet" href="../css/sign up.css" />
<div class="signup-form" id="signup-form">
  <a href="">     <div class="close-btn">&times;</div>
</a>
        <div class="container">
       
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"class="form-container" id="form">
            
            <label for="full-name">Full Name</label>
            <div class="inp">
              <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" minlength="5"
                maxlength="100" pattern="^[a-zA-Z]{3,30}$" title="use more than three alphabet letters"   />
            </div>
            <label for="email">Email</label>
            <div class="inp">
              <input type="email" id="semail" name="email" placeholder="someone123@example.com"
                pattern="^[a-zA-Z0-9_]+@[a-zA-Z]+[.]+com$" title="enter a valid email address eg.someone1234@gmail.com"
                  />
            </div>
            <label for="phone-number">Phone Number</label>
            <div class="inp">
              <input type="tel" id="phone-number" name="phone-number" placeholder="country code-number  eg. +251 911101010"
                title="please enter the country code and space and the rest digits" pattern="^[+]+[0-9]{3} [0-9]{9}$"
                  />
            </div>
        
            <label for="password-one">Password</label>
            <div class="inp">
              <input type="password" id="password-one" placeholder="enter your password with min of 8 characters  "  
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." name="password"/>
            </div>
            <label for="password-two">Confirm Password</label>
            <div class="inp">
              <input type="password" id="password-two" placeholder="confirm password"  
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" name="password" />
            </div>
            <button class="signup-button" name="submit">Sign Up</button>
            <span class="login-link"> Already have an account? <a href="../html/login.php">Login</a></span>
          </form>
        </div>
      </div>