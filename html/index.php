<?php
  session_start();
  $error = "";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}


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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../image/icons/favicon.png" />
  <link rel="stylesheet" href="../css/home page2.css">

  <link rel="stylesheet" href="../css/style-copy.css" />
  <link rel="stylesheet" href="../css/newlogin.css" />
  <link rel="stylesheet" href="../css/newsignup.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/contact-us.css" />
  <link rel="stylesheet" href="../css/destination.css">
  <title>Ethio Tour</title>
</head>

<body>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
  <script type="text/javascript"> 
function googleTranslateElementInit() { 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
} 
</script> 
 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="../jss/book validation.js"></script>
    <div class="image" id="landing-image">
      <div class="landing">
        <div class="blur-wrap">
          <span class="right">Et<br />to</span>

          <h1 class="about">About</h1>
          <p class="about-desc">
            ETHIO tour is an ethiopian tour company dedicated to give you the
            best trip you can imagine. <a href="#about"> READ MORE...</a>
          </p>
          <button class="signupbutton" id="show-signup">Be a member</button>
        </div>
        <div class="unblurred">
          <span class="left">hio<br />ur</span>
          <div class="language-toggle">
            <svg height="40" viewBox="0 0 48 48" width="40" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h48v48h-48z" fill="none" />
              <path fill="#D9C5C5"
                d="M23.99 4c-11.05 0-19.99 8.95-19.99 20s8.94 20 19.99 20c11.05 0 20.01-8.95 20.01-20s-8.96-20-20.01-20zm13.85 12h-5.9c-.65-2.5-1.56-4.9-2.76-7.12 3.68 1.26 6.74 3.81 8.66 7.12zm-13.84-7.93c1.67 2.4 2.97 5.07 3.82 7.93h-7.64c.85-2.86 2.15-5.53 3.82-7.93zm-15.48 19.93c-.33-1.28-.52-2.62-.52-4s.19-2.72.52-4h6.75c-.16 1.31-.27 2.64-.27 4 0 1.36.11 2.69.28 4h-6.76zm1.63 4h5.9c.65 2.5 1.56 4.9 2.76 7.13-3.68-1.26-6.74-3.82-8.66-7.13zm5.9-16h-5.9c1.92-3.31 4.98-5.87 8.66-7.13-1.2 2.23-2.11 4.63-2.76 7.13zm7.95 23.93c-1.66-2.4-2.96-5.07-3.82-7.93h7.64c-.86 2.86-2.16 5.53-3.82 7.93zm4.68-11.93h-9.36c-.19-1.31-.32-2.64-.32-4 0-1.36.13-2.69.32-4h9.36c.19 1.31.32 2.64.32 4 0 1.36-.13 2.69-.32 4zm.51 11.12c1.2-2.23 2.11-4.62 2.76-7.12h5.9c-1.93 3.31-4.99 5.86-8.66 7.12zm3.53-11.12c.16-1.31.28-2.64.28-4 0-1.36-.11-2.69-.28-4h6.75c.33 1.28.53 2.62.53 4s-.19 2.72-.53 4h-6.75z" />
            </svg>
          </div>

          <div class="socials">
            <img src="../image/icons/facebook.svg" alt="facebook" class="fb" />
            <img src="../image/icons/instagram.svg" alt="instagram" class="ig" />
            <img src="../image/icons/twitter.svg" alt="twitter" class="tw" />
            <img src="../image/icons/youtube.svg" alt="youtube" class="yt" />
          </div>
          <div class="navbar">
            <a href="home3.php"><button id="border-only" class="contactus">home</button>
            </a>
            <button id="border-only" class="contactus">contact</button>
            <button id="show-login4" class="destinations">destinations</button>
            <button id="show-login3" class="bookings">bookings</button></a>
            <button class="login" id="show-login">log in</button>
          </div>
        </div>

      </div>
      <div class="login-form" id="login-form">
        <div class="close-btn">&times;</div>

        <form action="login_validation.php" class="form-container" method="post">
          <div class="namelogo">
            <h1 class="company-name">Ethio Tour</h1>
          </div>
          <h1>A few steps away from your unforgettable trip</h1>
          <h3 class="welcome">Welcome back, Please login to your account</h3>
          <label for="email">UserName</label>
          <div class="inp">
            <input type="text" name="username" id="email" placeholder="" title="" required />
          </div>
          <label for="password">Password</label>
          <div class="inp">
            <input type="password" name="password" id="password" placeholder="your password here" required
              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" />
          </div>
          <?php if (!empty($error)): ?>
          <div class="error">
            <?php echo $error; ?>
          </div>
          <?php endif; ?>
          <span><a href="#">Forget password?</a></span>
          <input type="hidden" name="email" value="<?php echo false;?>">
          <button class="login-button" name="submitt" id="loggin">Login</button>
          <span class="signup-link">Don't have an account? <a href="#">Sign up</a></span>
        </form>
      </div>
      <!-- sign up -->
      <div class="signup-form" id="signup-form">
        <div class="close-btn">&times;</div>
        <div class="container">
          <!-- form for signup -->


          <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"class="form-container" id="form">
            <!-- full name -->
            <label for="full-name">Full Name</label>
            <div class="inp">
              <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" minlength="5"
                maxlength="100" title="use more than three alphabet letters" oninput="namee" />
                <p id="warning1"></p>
              </div>
            <!-- email  -->
            
            <!-- phone number -->
            <label for="phone-number">Phone Number</label>
            <div class="inp">
              <input type="hidden" name="email" value="<?php echo false;?>">
              <input type="tel" id="phone-number" name="phone-number"
                placeholder="country code-number  eg. +251 911101010"
                title="please enter the country code and space and the rest digits" pattern="^[+]+[0-9]{3} [0-9]{9}$"
                required />
            </div>
            <!--address -->
            <label for="address">Address</label>
            <div class="inp">
              <input type="text" id="address" name="address" placeholder="Enter your city" required minlength="3"
                maxlength="50" title="please enter 3 or more than characters" />
            </div>
            <!-- your password-->
            <label for="password-one">Password</label>
            <div class="inp">
              <input type="password" id="password-one" placeholder="enter your password with min of 8 characters  "
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."
                name="password-one" />
            </div>
            <!-- confirm password -->
            <label for="password-two">Confirm Password</label>
            <div class="inp">
              <input type="password" id="password-two" placeholder="confirm password" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" name="password-two" />
            </div>
            <!-- submit button -->
            <button name="submit"class="signup-button">Sign Up</button>
            <span class="login-link"> Already have an account? <a href="#">Login</a></span>
          </form>
        </div>
      </div>
    </div>
    <div class="topdest">
      <div class="gradient-overlay">
        <div class="text-desc">
          <span class="top">top</span>
          <span class="dest">destinations</span>
          <p class="description"> It's hard enough deciding to move, you don't have to worry about where to move to.
            These
            are some of the most popular and best locations to move to based on a number of factors. </p>
        </div>
        <section class="gallery-img" id="blur">
          <div class="gallery img1">
            <div>
              <a href="../html/Axum.html" style="color: white;text-decoration: none;">
                <h1>AXUM</h1>
              </a>
            </div>
          </div>
          <div class="gallery img2">
            <div>
              <h1>40MINCH</h1>
            </div>
          </div>
          <div class="gallery img3">
            <div>
              <h1>DANAKIL</h1>
            </div>
          </div>
          <div class="gallery img4">
            <div>
              <a href="#" style="color: white; text-decoration: none;">
                <h1>FASILEDES</h1>
              </a>
            </div>
          </div>
          <div class="gallery img5">
            <div>
              <h1>LALIBELA</h1>
            </div>
          </div>
          <div class="gallery img6">
            <div>
              <h1>SEMIEN</h1>

            </div>

          </div>
        </section>
        <a href="#login-form"> <button class="login" id="show-login2"
            style="padding: 10px 300px;margin-left: 20%;background-color: rgb(70, 10, 10);color: antiquewhite;font-size: 16px;">explore
            more...</button></a>

      </div>

      <div class="contact-us" id="contact-us">
        <div class="header">
          <h1>Contact Us</h1>
          <h4>Any questions or remarks ? Just write us a message !</h4>
        </div>
        <div class="contact-container">
          <div class="contact-info">
            <h3>Contact Information</h3>
            <div class="rows">
              <div class="tel" id="contacts">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 10.999H22C22 5.869 18.127 2 12.99 2V4C17.052 4 20 6.943 20 10.999Z" fill="white" />
                  <path
                    d="M13 7.99999C15.103 7.99999 16 8.89699 16 11H18C18 7.77499 16.225 5.99999 13 5.99999V7.99999ZM16.422 13.443C16.2298 13.2683 15.9773 13.1752 15.7178 13.1832C15.4582 13.1912 15.212 13.2998 15.031 13.486L12.638 15.947C12.062 15.837 10.904 15.476 9.71198 14.287C8.51998 13.094 8.15898 11.933 8.05198 11.361L10.511 8.96699C10.6974 8.78612 10.8061 8.53982 10.8141 8.2802C10.8222 8.02059 10.7289 7.76804 10.554 7.57599L6.85898 3.51299C6.68402 3.32035 6.44086 3.2035 6.18113 3.18725C5.9214 3.17101 5.66557 3.25665 5.46798 3.42599L3.29798 5.28699C3.12509 5.46051 3.0219 5.69145 3.00798 5.93599C2.99298 6.18599 2.70698 12.108 7.29898 16.702C11.305 20.707 16.323 21 17.705 21C17.907 21 18.031 20.994 18.064 20.992C18.3085 20.9783 18.5393 20.8747 18.712 20.701L20.572 18.53C20.7414 18.3325 20.8273 18.0768 20.8112 17.817C20.7951 17.5573 20.6785 17.3141 20.486 17.139L16.422 13.443Z"
                    fill="white" />
                </svg>
                <span>+251-906-290-648</span>
              </div>
              <div class="email-address" id="contacts">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 4H2V20H22V4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white" />
                </svg>
                <span>ethiotour@gmail.com</span>
              </div>
              <div class="address" id="contacts">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12 1.5C9.81276 1.50258 7.71584 2.3726 6.16923 3.91922C4.62261 5.46584 3.75259 7.56276 3.75001 9.75C3.74739 11.5374 4.33124 13.2763 5.41201 14.7C5.41201 14.7 5.63701 14.9963 5.67376 15.039L12 22.5L18.3293 15.0353C18.3623 14.9955 18.588 14.7 18.588 14.7L18.5888 14.6978C19.669 13.2747 20.2526 11.5366 20.25 9.75C20.2474 7.56276 19.3774 5.46584 17.8308 3.91922C16.2842 2.3726 14.1873 1.50258 12 1.5ZM12 12.75C11.4067 12.75 10.8266 12.5741 10.3333 12.2444C9.83995 11.9148 9.45543 11.4462 9.22837 10.8981C9.00131 10.3499 8.9419 9.74667 9.05765 9.16473C9.17341 8.58279 9.45913 8.04824 9.87869 7.62868C10.2982 7.20912 10.8328 6.9234 11.4147 6.80764C11.9967 6.69189 12.5999 6.7513 13.1481 6.97836C13.6962 7.20542 14.1648 7.58994 14.4944 8.08329C14.8241 8.57664 15 9.15666 15 9.75C14.999 10.5453 14.6826 11.3078 14.1202 11.8702C13.5578 12.4326 12.7954 12.749 12 12.75Z"
                    fill="white" />
                </svg>
                <span>Bahir Dar, Amhara Ethiopia</span>
              </div>
            </div>
          </div>
          <div class="form-wrapper">
            <form action="" name="contact-form" method="post">
              <div class="fname">
                <label for="fname">First Name</label>
                <input type="text" id="block">
              </div>
              <div class="lname">
                <label for="lname">Last Name</label>
                <input type="text" id="block">
              </div>
              <div class="email">
                <label for="email">Email</label>
                <input type="email" id="block">
              </div>
              <div class="phoneno">
                <label for="phoneno">Phone </label>
                <input type="number" id="block">
              </div>
              <div class="subject">
                <span>Select subject ?</span>
                <div class="subject-type">
                  <input type="radio" name="type">
                  <span>General Inquiry</span>
                  <input type="radio" name="type">
                  <span>Business Related</span>
                  <input type="radio" name="type">
                  <span>Feedback</span>
                </div>
              </div>
              <div class="question">
                <label for="find">How did you find us ?</label>
                <select name="choice" id="choice">
                  <option value="Social Media">Social Media</option>
                  <option value="Broadcast Media">Broadcast Media</option>
                  <option value="Print Media">Print Media</option>
                  <option value="Friends">Friends</option>
                </select>
              </div>
              <div class="message">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="1"></textarea>
              </div>
              <!-- <button>Send Message</button> -->
              <input type="submit" class="btn" value="Send Message">
            </form>
          </div>
        </div>
      </div>
      <div class="container-three">
        <div>
          <h1 class="title-three" id="about" style="color:white; background-color:black; ">Who are we</h1>
        </div>
        <div class="content-three">
          <p>Ethio Tour is an Ethiopian tour and travel agency that offers an array of travel services for tourists
            and visitors to Ethiopia. The agency specializes in providing customized and comprehensive travel
            packages for clients, including cultural, historical, and adventure tours, as well as trekking and
            wildlife safaris. <br><br>
            The staff at Ethio Tour is knowledgeable and experienced, and they are dedicated to ensuring that
            clients have a memorable and enjoyable experience in Ethiopia. With a strong commitment to providing
            high-quality services, Ethio Tour has become one of the leading tour and travel agencies in Ethiopia,
            offering travelers a unique opportunity to explore and experience the rich history, culture, and natural
            beauty of the country.</p>
        </div>
      </div>
      <footer>
        <div class="five">
          <div class="flex-one">
            <div class="flex-one-img">
              <img src="../image/output-onlinepngtools (1).png" alt="">

            </div>
            <div class="flex-one-text">
              <p>The Best Trips For bare foot Travellers <br>
                Are you ready for the adventure of a lifetime? <br>
                bare foot travel is an incredible way to <br>
                experience new cu <a href="">read more</a></p>
            </div>
          </div>
          <div class="flex-two">
            <h2>Destinations</h2>
            <ul>
              <li> <a href="../html/destination.html"> Axum</a></li>
              <li> <a href="../html/destination.html"> Lalibela</a></li>
              <li> <a href="../html/destination.html"> Sof-umer</a></li>
              <li> <a href="../html/destination.html"> Fasiledes</a></li>
              <li> <a href="../html/destination.html"> Tis-abay</a></li>
              <li> <a href="../html/destination.html"> Harrar</a></li>
              <li> <a href="../html/destination.html"> Danakil</a></li>
            </ul>

          </div>
          <div class="flex-three">
            <h2>Helpful links</h2>
            <ul>
              <li><a href="../html/about-us.html">About-Us</a></li>
              <li><a href="../html/contact-us.html">Contact-Us</a></li>
              <li><a href="../html/destination.html">Destination</a></li>
              <li><a href="../html/our -services.html">Our Services</a></li>
              <li><a href="../html/privacy-policy.html">Privacy-Policy</a></li>
              <li><a href="../html/terms and conditions.html">Terms And Conditions</a></li>
            </ul>
          </div>
          <div class="flex-four">
            <h2>Contact-Info</h2>
            <p>ETHIO TOUR AND TRAVEL</p>
            <P>Bahir-dar St.George street Poly campus</P>
            <p>Email</p>
            <p><a href=""> bboche651@gmail.com</a></p>
            <div><img src="../image/email3.png" alt="" style="width: 40px; height: 40px;">
              <img src="../image/twitter.png" alt="" style="width: 40px; height: 40px;">
              <img src="../image/instagram.png" alt="" style="width: 40px; height: 40px;">
              <img src="../image/telegram.png" alt="" style="width: 40px; height: 40px;">
            </div>
            <p>2023</p>
          </div>
        </div>
      </footer>
      <script type="text/javascript" src="../js/script1.js"></script>
      <script type="text/javascript" src="../js/login.js"></script>
      <script type="text/javascript" src="../js/signup.js"></script>
      <script type="text/javascript" src="../js/validate-signup.js"></script>
  </body>

  </html>