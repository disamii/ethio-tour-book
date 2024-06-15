<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home page2.css">
    <link rel="stylesheet" href="../css/money transcation form.css">
</head>
<body>
    <div class="full">
        <header>
    
            <div class="c1 ">
                <div class="over"> 
                <img src="../image/output-onlinepngtools (1).png">
    
                     <div class="inner">
                    <h2> <span>COME </span><span style="color: rgb(221, 41, 41);">ALONG </span> </h2>
                    <p>ON A <b style="color: rgb(103, 100, 100);font-weight: 30px;">WONDEROUESS</b>  JOURNEY TO THE <b style="color: rgb(106, 102, 102)">PINAKLE</b>  OF <br> <b> NATURE </b>AND HISTORY</p>
    
                </div>
               
            </div>
            </div>
             </header>
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
                                <li><a href="../html/spritual .html"> spritual</a></li>
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
            </nav>
    <script src="../js/book validation.js"></script>
    <form action="" style="margin: 5% auto;">
        <h3 style="text-align: center;color: beige;"> CREDIT CARD</h1>


        <label for="card-number">CREDIT CARD NUMBER:</label>
        <input type="text" name="ccn" id="ccn"  
        oninput="ccnMessage(); setTimeout(ccnn, 1000);" required>
        <p id="warning10"></p>
      
        <label for="expiry-date">EXPIRY DATE:</label>
        <input type="month" id="expiry-date" name="expiry-date" oninput="expiry_dateMessage(); setTimeout(exipary_datee, 1000);"  >
        <p id="warning11"></p>

        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" id="cvv"  
        oninput="cvvMessage(); setTimeout(cvvv, 1000);" required>
        <p id="warning12"></p>



        
            <input type="submit" value="Book Now"  onclick="validateForm()" required>
            <!-- <a href="../html/bankingbook.html"> <input type="button" value="Banks transaction method" onclick=""> -->
            </a>
        
    </form>
    <?php 
   include 'footer.php';
   ?>
</body>
</html>