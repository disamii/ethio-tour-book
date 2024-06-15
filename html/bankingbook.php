

<?php
 session_start();
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "bookforms"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    $tour_price= $_SESSION['tour_price'];
    $hotel_price= $_SESSION['hotel_price'];
    $total_price=   $tour_price+  $hotel_price;
    echo $_SESSION['booksql'];
?>

<html>
<head> 
    <title>Transaction Page</title>
    <style>
    body {
               
        }
    .transferMoney{
        color:white;
        border-radius:12px;
        padding: 20px;
        position:relative;
        
    }
 
    </style>   
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
       
    </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="../css/home page2.css">
    <link rel="stylesheet" href="../css/money transcation form.css">
</head>
<!-- BODY-->
<body>
<!-- INCLUDING NAVBAR-->
<?php 
   include 'header.php';
   ?>
<div class = 'transferMoney'>
    <h1>Transfer Money</h1>
    
    
    <form   method='POST' action=" RESULT.php" >
    <table id="table1">
    <div class="price">
        <div>
            <label for="guests"   >price for tour in ETB</label><br>
            <input type="text" name="price_tour" id="trprice" placeholder="price"  value="<?php echo $tour_price;?>"
          readonly   >
            <p id="warning9"></p>
        </div>
       <div>
        <label for="guests"   >price for hotel in ETB </label><br>
        <input type="text" name="price_hoel" id="hprice" placeholder="price"   value="<?php  echo $hotel_price;?>"
        readonly  >
        <p id="warning9"></p>
       </div>
       <div>
        <label for="guests"   >total price  in ETB</label><br>
        <input type="text" name="guests_total" id="totalprice" placeholder="price" value="<?php  echo $total_price;?>"
         readonly  >
        <p id="warning9"></p>
       </div>
        <tr>
            <td>Payer Account No</td>
            <td><input type="number" name="payerID"  min=100 required><td>
        </tr>
        <tr>
            <td>Payee Account No</td>
            <td><input type="number" name="payeeID"  readonly  value="111"><td>
        </tr>
        <tr>
            <td>Amount (in ETB)</td>
            <td><input type="number" name="amount" min=1 readonly  value="<?php echo $total_price;?>"><td>
        </tr>
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" name=" done" value="PROCEED"><td>
                <td><a href="CBE.php"> <input type="button" value="create CBE account" ></td>
        </tr>
        </table>
    </form>
</div>
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
                   <li> <a href=""> Axum</a></li>
                   <li> <a href=""> Lalibela</a></li>
                   <li> <a href=""> Sof-umer</a></li>
                   <li> <a href=""> Fasiledes</a></li>
                   <li> <a href=""> Tis-abay</a></li>
                   <li> <a href=""> Harrar</a></li>
                   <li> <a href=""> Danakil</a></li>
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