<?php
$success = 0;
$user = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABaSE = 'bookforms';
    
    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
    
      if(!$conn){
        die(mysqli_error($conn));
        
      }
  $username=$_POST['name'];
  $password=$_POST['email'];
  $address=$_POST['account'];
  $phone=$_POST['deposit'];
  
  $spl = "Select * from accounts where
  name ='$username'";
$echo= '';
$error="";
  $result = mysqli_query($conn, $spl);
  if($result){
    $num = mysqli_num_rows($result);
    if($num>0 ){
      
$error= "User already exists in database";
      $user =1;
    }
    else{
      $sql = "insert into accounts (accID, name,email,balance)
  values('$address', '$username','$password','$phone')";
;
  $result = mysqli_query($conn, $sql);
  if($result){
    $echo=  "deposit successfull.$username" ;
    
    $success = 1;
  }
  else{
    die(mysqli_error($conn));
  }

    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book banking</title>
    <link rel="stylesheet" href="../css/home page2.css">
    <link rel="stylesheet" href="../css/gallery.css">
    <style>
body
{
    
    background-image: url(../image/semien.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    /* background: linear-gradient(to right,#0f2027,#203a43,#2c3564); */
}
.input-field {
  padding: 5px;
  font-size: 16px;
  }
  
  .warning-message {
     background-color: cornflowerblue;
    margin: 5px 0;
    text-align: right;
    padding: auto;
  }
  
  .error {
    border-color: red;
    color: red;
  }
  
  .success {
    
    border-color: green;
    color:blue;  }
  
  .empty {
    color: red;
  }
  
  .not-a-number {
    color: red;
  }
  
  .large-number {
    color: red;
  }
form {
max-width: 500px;
margin: 0 auto;
padding: 20px;
border: 1px solid #ccc;
border-radius: 5px;
animation: slideInFromLeft 0.5s ease-in-out;
}
label {
display: block;
margin-bottom: 5px;
transform: translateY(20px);
opacity: 0;
animation: slideInFromLeft 0.5s ease-in-out forwards;
animation-delay: 0.2s;
}
input[type="text"],
input[type="number"],
select {
width: 100%;
padding: 5px;
margin-bottom: 10px;
border-radius: 3px;
border: 1px solid #ccc;
transform: translateY(20px);
opacity: 0;
animation: slideInFromLeft 0.5s ease-in-out forwards;
animation-delay: 0.4s;
}
input[type="submit"] {
background-color: #4CAF50;
color: white;
padding: 10px;
border: none;
border-radius: 3px;
cursor: pointer;
transform: translateY(20px);
opacity: 0;
animation: slideInFromLeft 0.5s ease-in-out forwards;
animation-delay: 0.6s;
}

input[type="submit"]:hover {
background-color: #3e8e41;
}
@keyframes slideInFromLeft {
0% {
transform: translateX(-50px);
opacity: 0;
}
100% {
transform: translateX(0);
opacity: 1;
}
}
    </style>
</head>
<body>
    
    <div class="full">
        <header>
            <div class="c1 ">
                <div class="over">
                    <img src="../image/output-onlinepngtools (1).png">
                    <div class="inner">
                        <h2> <span>COME </span><span style="color: rgb(221, 41, 41);">ALONG </span> </h2>
                        <p>ON A <b style="color: rgb(103, 100, 100);font-weight: 30px;">WONDEROUESS</b> JOURNEY TO THE
                            <b style="color: rgb(106, 102, 102)">PINAKLE</b> OF <br> <b> NATURE </b>AND HISTORY</p>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <nav  style="position: sticky;top: 0; z-index: 999;">
        <ul class="main">
            <input type='checkbox' id='check' />
            <span class="menu">
            <li class="n"><a href="/html/about-us.html">
                   About-us
                </a></li>
            <li class="n"> <a href="../html/Hotels.html">
                  Hotels
                </a></li>
                
                <li class="n">
                    <a href="../html/money transaction.html">
                        Booking
                    </a>
                </li>
                <li class="n"> <a href="../html/travel packeges.html">
                  Ready travel packages
              </a></li>
                <li class="no"> 
                   <a href="../html/destination.html">Tour catagory</a> 
                    <ul>
                        <li><a href="../html/cultural tour.html">Cultural </a> </li> 
                        <li><a href="../html/adventure.html"> Nature</a></li>
                        <li><a href="../html/heritage.html"> Heritages</a></li>
                        <li><a href="../html/holiday tour.html"> Holiday</a></li>
                        <li><a href="../html/spritual - Copy.html"> Religious</a></li>
                    </ul>
                  </li>
                  <li class="n"> <a href="../html/destination.html">
                    Top Destinations
                </a></li>
                <li class="n"> <a href="../html/home3.html" class="selected">
                    Home
                </a></li>
               </span>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </ul>
        <div style="background-color:black;color:white;">        
        <?php
       echo $echo;
       echo $error;
       ?>
       </div>
    </nav>
    <form style="padding: 100px;" action="CBE.php" method="post">
        <label for="sender">Name</label>
   <input type="text" id="name" name="name" placeholder="your name"; 
        oninput="nameMessage(); setTimeout(namee, 1000);" required>
        <p id="warning1"></p>        
        <label for="amount">Email</label>
        <input type="text" id="email" name="email" placeholder="your email"; >
        
        <label for="amount">AccId</label>
        <!-- <input type="number" id="amount" name="amount" required> -->
        <input type="number" name="account" id="guests" placeholder="in number"
         setTimeout(guest, 1000);" required>
        <p id="warning9"></p>
        <label for="currency">Deposit-Amount</label>
   <input type="number" id="name" name="deposit" placeholder="the amount you want to deposit" 
        oninput="nameMessage(); setTimeout(namee, 1000);" required>
    <input type="submit" value="Submit">
   <input type="submit" value="Go back to transaction"> <a href="bankingbook.php">book</a>
        </form>
        <script src="../js/book validation.js"></script>
        <footer>
            <div class="five">
               <div class="flex-one">
                   <div class="flex-one-img" >
                       <img src="../image/output-onlinepngtools (1).png" alt="">
    
                   </div>
                   <div class="flex-one-text">
                      <p>The Best Trips For bare foot Travellers <br>
                       Are you ready for the adventure of a lifetime?  <br>
                      bare foot travel is an incredible way to  <br>
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
</body>
</html>