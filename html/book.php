<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="../css/book - Copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/home page2.css">
</head>
<body>
<?php 
   include 'header.php';
   ?>
        <h2 class="heading">
            <div style="margin-top: -2%;">
            <span>B</span>
            <span>O</span>
            <span>O</span>
            <span>K</span>
            <span class="space"></span>
            <span>N</span>
            <span>O</span>
            <span>W</span>
        </div>
        </h2>
        <section class="book" id="book">
            
        
            <div class="row">
        
               
                <form action="" style="height: 100%">
                    <div class="inputBox">
                         <label for="tourname">WHERE TO</label> <br>
                     <input type="text" id="tourname" required placeholder="Choose your tour route">
                        
                
                    </div>
                    <div class="inputBox">
                        <label for="destination">DESTINATIONS</label><br>
                        <input type="text" id="destination" required placeholder="Choose your Destination">
                    </div>
                    <div class="inputBox">
                       <label for="hotel">HOTEL</label><br>
                      <input type="text" id="hotel" placeholder="choose your hotel" required>
                    </div>
                    <div class="inputBox">
                       <label for="guests">HOW MANY</label><br>
                        <input type="number" name="guests" id="guests" placeholder="number of guests" required>
                    </div>
                    <div class="inputBox" style="float: left;width: 45%">
                       <label for="arrivals">ARRIVAL</label><br>
                        <input type="date" name="arrivals" id="arrivals">
                    </div>
                    <div class="inputBox" style="width: 45%;float: right">
                        <label for="date">LEAVING</label><br>
                        <input type="date" name="leaving" id="leaving" required>
                        
                    </div>
                    <input class="booking" name="BOOK NOW" value="BOOK NOW" style="margin-bottom:5px">
                    
                </form>
        
            </div>
    </section>
<footer>
    <div class="five">
       <div class="flex-one">
           <div class="flex-one-img" >
               <img src="../image/output-onlinepngtools (1).png" alt="">
           </div>
           <div class="flex-one-text">
              <p>The Best Trips For Solo Travellers <br>
               Are you ready for the adventure of a lifetime?  <br>
               Solo travel is an incredible way to  <br>
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
</div>
</body>
</html>