<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="../css/contact-us.css">
    <link rel="stylesheet" href="../css/home page2.css">
</head>
<body>
<?php 
   include 'header.php';
   ?>
        <div class="one" style="background-image: url(../image/kobo.jpeg);">
            <div class="one-overlay">
                <div class="two">
            <h1>CONTACT US</h1>
            <p>Feel Free To Call Us</p>
        </div>
        </div>
        </div>
    
      </div>
      <div class="contact-flex">
      <div class="flex-six">
        <h2>Call Us Today</h2>
        <ul>
            <li> <p>To book or make an enquiry  call on <br> +251 979045158</p></li>
            <li> <p>Monday-Friady 2:30-11:00</p></li>
            <li> <p>Saturday &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;2:30-8:30</p></li>
            <li> <p>Sunday &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Closed</p></li>
            <li> Closed on Bank Holidays</li>
          
        </ul>
    </div>
    <div class="flex-seven">
        <h2>Come and Meet Us</h2>
       <p>If you would like to come in and discuss our<br> holidays in  person, 
            please call +251979045158<br> or e-mail <a href="">bboche651@gmail.com</a> 
            before <br>coming to make an appointment.</p>
    </div>
</div> 
    <div class="two-forms">
      <div class="form-box" style=" display: flex;align-items: flex-start;flex-direction: column;">
        <h1>Email-us</h1>
        <p>If you have a question about your travel arrangements, <br> please fill in your email address and message and click submit.</p>
        <fieldset style="margin-top: 50px;">
            <form action="" name="contactus">
                <div class="inputbox">
                <label for="name">NAME</label>
                <input type="text" placeholder="enter your name" pattern="^[a-zA-Z]{3,30}$" title="no need to use number use only character" required><br>
            </div>
            <div class="inputbox">
                <label for="email">EMAIL</label>  
                <input type="email" placeholder="enter a vaild email" pattern="^[a-zA-Z0-9_]+@[a-zA-Z]+[.]+com$" title="eg. someone@gmanil.com" required><br>  
            </div>
            <div class="inputbox">
                 <label for="subject">SUBJECT</label>
                 <input type="text" placeholder="inquiry for ethio tour"><br>
                </div>
                <div class="inputbox">
                 <textarea name="text area" id="text-area" cols="30" rows="5">MESSAGE</textarea><br>
                 </div>
              <div class="inputbox">
                 <input type="checkbox" id="check" name="check"> <label for="check">send me a copied email</label>
                </div>
                
                <div class="inputbox">
                    <div class="submit">
                
                 <input type="submit" style="width: 100%; background-color: blue; color: white; ">
                </div>
            </div>
            </form>
        </fieldset>
      </div>
      <div class="form-box">
        <h1>Request a Call-Back</h1>
        
                <p>If you would like one of our travel experts to call you back, <br> please fill in the below fields and click submit. <br> If we are unable to reach you via telephone, we will send an email to the address provided <br> to reschedule your call.</p>
                <fieldset>
            <form action="" name="contactus">
                <div class="inputbox">
                <label for="name">NAME</label>
                <input type="text" placeholder="enter your name" pattern="^[a-zA-Z]{3,30}$" title="no need to use number use only character" required><br>
            </div>
            <div class="inputbox">
                <label for="email">EMAIL</label>  
                <input type="email" placeholder="enter a vaild email" pattern="^[a-zA-Z0-9_]+@[a-zA-Z]+[.]+com$" title="eg. someone@gmanil.com" required><br>  
            </div>
            <div class="inputbox">
                 <label for="subject">SUBJECT</label>
                 <input type="text" placeholder="inquiry for ethio tour"><br>
                </div>
                <div class="inputbox">
                 <textarea name="text area" id="text-area" cols="30" rows="5">MESSAGE</textarea><br>
                 </div>
              <div class="inputbox">
                 <input type="checkbox" id="check" name="check"> <label for="check">send me a copied email</label>
                </div>
                
                <div class="inputbox">
                    <div class="submit">
                
                 <input type="submit" style="width: 100%; background-color: blue; color: white; ">
                </div>
            </div>
            </form>
        </fieldset>
      </div>
    </div>
 
    <div class="map">
        <img src="../image/Screenshot (65).png" alt="">
     </div>
    </div> 
    <?php 
   include 'footer.php';
   ?>
</body>
</html>