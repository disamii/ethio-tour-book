
<?php
session_start();
header("Cache-Control: private, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat,26 Jul 1997 05:00:00 GMT");
//CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "bookforms"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //IF CONNECTION IS NOT SUCCESSSFUL
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    // session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
  exit;
}
?>
<!--HTML CODE STARTS -->
<html>
<head> 
    <title>Transaction Page</title>
    <style>
    body {
               padding-top: 60px;
               font-size:25px;
               background-image: url(../image/semien.jpg);
               color:white;
               background-repeat: no-repeat;
               background-size: cover;
        }
    .center{
 
        padding-top:5px;
        display: block;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;    
    }
    .fancy {
 background-color: #0e4729;
 border: 2px solid #000;
 border-radius: 10px;
 box-sizing: border-box;
 color: white;
 cursor: pointer;
 display: inline-block;

 font-weight: 700;
 letter-spacing: 0.05em;

 outline: none;
 overflow: visible;
 padding: 1.25em 2em;
 position: relative;
 top:380px;
 left:380px;
 text-align: center;
 text-decoration: none;
 text-transform: none;
 transition: all 0.3s ease-in-out;
 user-select: none;
 font-size: 13px;
 width:300px;
 height:60px;
}

.fancy::before {
 content: " ";
 width: 2.9625rem;
 height: 2px;
 background: white;
 top: 50%;
 color:white;
 left: 1.5em;
 position: absolute;
 transform: translateY(-50%);
 transform-origin: center;
 transition: background 0.3s linear, width 0.3s linear;
}

.fancy .text {
 font-size: 1.425em;
 line-height: 1.33333em;
 padding-left: 2em;

 transition: all 0.3s ease-in-out;
  text-decoration: none;
 color:white;
 font-family:arial;
}

.fancy .top-key {
 height: 2px;
 width: 1.5625rem;
 top: -2px;
 left: 0.625rem;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, left 0.3s ease-out;
}

.fancy .bottom-key-1 {
 height: 2px;
 width: 1.5625rem;
 right: 1.875rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy .bottom-key-2 {
 height: 2px;
 width: 0.625rem;
 right: 0.625rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy:hover {
 color: #fff;
 background: #FFF;
 box-shadow:1px 1px 1px white;
}

.fancy:hover::before {
 width: 0.9375rem;
 background: white;
}

.fancy:hover .text {
 color: black;
 padding-left: 1.5em;
}

.fancy:hover .top-key {
 left: -2px;
 width: 0px;
}

.fancy:hover .bottom-key-1,
 .fancy:hover .bottom-key-2 {
 right: 0;
 width: 0;
}
    .center2{
        font-size:15px;
        width:100%;
    }
    table {
    margin: 0 auto; /* or margin: 0 auto 0 auto */
  }
    td,th { border: 1px solid rgb(70, 62, 62); padding: 8px;}
    #Table{ font-family: Arial,Helvetica, sans-serif; border-collapse: collapse;}
    #Table tr:nth-child(even){ background-color: none; }
    #Table tr:nth-child(odd){ background-color: none; }
    #Table tr:hover{ background-color: #b5d0eb; }
    #Table th { padding-top: 12px; padding-bottom: 12px; text-align:left; background-color: rgb(70, 62, 62); color:white; }

    </style>    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script type="text/javascript">
    
    if(window.history.replaceState){
        
        window.history.replaceState(null, null, window.location.href); 
    }
    
</script>
</head>
<body>

<?php 
  if(isset($_POST['done'])){


      $PAYER_ID = intval(htmlspecialchars($_POST['payerID']));
      // $ = htmlspecialchars($_POST['payeeID']);
      $AMOUNT =htmlspecialchars($_POST['amount']);
     
    //   if(empty($PAYER_ID) || empty($PAYER_ID) || empty($AMOUNT)){     
    //     echo "<script> alert('Empty Fields !!');
    //     window.location.href='bankingbook.php';
    //     </script>";  
    //     exit() ;           
    //   }

    //   CHECK IF AMOUNT IS GREATER THAN 0 OR NOT
    //   if($AMOUNT <=0){
    //     echo "<script> alert('Amount must be greater than zero !!');
    //     window.location.href='bankingbook.php';
    //     </script>";  
    //     exit() ;  
    //   }

    //   if(!ctype_digit($AMOUNT) || !ctype_digit($PAYER_ID) || !ctype_digit(111)){
    //     echo "<script> alert('Entered value can only contain digit!!');
    //     window.location.href='bankingbook.php';
    //     </script>";  
    //     exit() ;  
    //   }

      $sqlcount = "SELECT COUNT(1) FROM accounts where accID=$PAYER_ID";
      $r =  $conn->query($sqlcount);
      $d = $r->fetch_row();
      if($d[0]<1){
        echo "<script> alert('Payer ID does not exists !!'
        window.location.href='bankingbook.php';
        </script>";  
        exit() ;      
      }
    
     
      $sqlcount = "SELECT COUNT(1) FROM accounts where accID='111'";
      $r =  $conn->query($sqlcount);
      $d = $r->fetch_row();
      if($d[0]<1){
        echo "<script> alert('Payee ID does not exists !!');
        window.location.href='bankingbook.php';
        </script>";  
        exit() ;      
      }
      

      $sql = "Select * from accounts where accID='$PAYER_ID'";       
          if($result = $conn->query($sql)){            
               $row1 = $result->fetch_array(); 
               if($row1['balance']<$AMOUNT){
                echo "<script> alert('Payer does not have required balance !!');
                window.location.href='bankingbook.php';
                </script>";  
                exit() ; 
                }  
          }  
          $rslt=mysqli_query($conn,$_SESSION['booksql']);
          echo "<div class ='center'>";
          echo "<div class ='center2'>";
          echo "<h1 style='text-align: center'>Transaction Successfully Completed</h1>
                <p  style='text-align: center; font-size:25px;'>Details of payer and payee are as follows<p>
                <table id = 'Table'>
                <tr>
                <th></th>
                <th>Account No</th>
                <th>Name</th>
                <th>Email</th>
               
                </tr>";
          

          $sql = "Select * from accounts where accID='$PAYER_ID'";       
          if($result = $conn->query($sql)){            
               $row1 = $result->fetch_array(); 
                       echo "<tr> 
                            <td> Payer </td>
                            <td>".$row1['accID']."</td>
                            <td>".$row1['name']."</td>
                            <td>".$row1['email']."</td>
                           
                            </tr>";                        
                       $PayerCurrentBalance = $row1['balance'];            
            }
        
          $sql2 = "Select * from accounts where accID='111'";
          if($result = $conn->query($sql2)){
                $row2 = $result->fetch_array();
                       echo "<tr> 
                            <td> Payee </td>
                            <td>".$row2['accID']."</td>
                            <td>".$row2['name']."</td>
                            <td>".$row2['email']."</td>
                           
                            </tr>"; 
                        $PayeeCurrentBalance = $row2['balance'];                       
               
               
            }               
            echo "</table>";
            $a=($AMOUNT*20)/100;
            $PayeeCurrentBalance += $AMOUNT-$a;
            $PayerCurrentBalance -= $AMOUNT;
            echo "<br>";
            echo "<table id = 'Table' style='margin-bottom:15px;'>
                    <tr>
                        <th></th>
                        <th>Old Balance</th>
                        <th>New Balance</th>
                        
                    </tr>
                    <tr>
                        <th>Payer</th>
                        <td style='color:black'>".$row1['balance']."</td>                        
                        <td style='color:black'>".$PayerCurrentBalance."</td>
                    </tr>
                    <tr>
                        <th>Payee</th>
                        <td style='color:black'>".$row2['balance']."</td>                        
                        <td style='color:black'>".$PayeeCurrentBalance."</td>
                    </tr>
                    <tr>
                    <th>for ethio-tour</th>
                    <td style='color:black'>$a</td> 
                    <td style='color:black'></td>                     
                   
                </tr>";
            echo "</table>";
         


           $updatepayer ="Update accounts set balance='$PayerCurrentBalance' where accID='$PAYER_ID'";
           $updatepayee ="Update accounts set balance='$PayeeCurrentBalance' where accID='111'";

           if($conn->query($updatepayer)==true){
                ?>         
                <script>console.log("PAYER DETAILS UPDATED!!")</script>
                <?php
           }
           else{
                ?>        
                <script>alert("PAYER DETAILS NOT UPDATED!!")</script>
                <?php
           }

           //CHECK IF PAYEE DETAILS ARE UPADTED OR NOT 
           if($conn->query($updatepayee)==true){
                    ?>         
                    <script>console.log("PAYEE DETAILS UPDATED! ")</script>
                    <?php
            }
            else{
                    ?>        
                    <script>alert("PAYEE DETAILS NOT UPDATED! ERROR OCCURED!")</script>
                    <?php
            }

            date_default_timezone_set('Africa/Addis_Ababa');          
            $date = date('Y-m-d H:i:s',time());
            //echo "Current time is : ".$date;

            //FOR UPDATING HISTORY TABLE WHICH MAINTAINS RECORDS OF ALL TRANSACTIONS
            $InsertTransactTable ="Insert into history (payer, payerAcc, payee,amount, time) values ('$row1[name]','$row1[accID]','Ethio_tour','$AMOUNT','$date')";
            //EXECUTING INSERT COMMAND AND CHECKING IF INSERTION WAS SUCCESSULL OR NOT
            if($conn->query($InsertTransactTable)==true){
                    ?>         
                    <script>console.log("Record of this transaction saved! ")</script>
                    <?php
            }
            else{
                    ?>        
                    <script>alert("Record of this transaction saved! ERROR OCCURED!")</script>
                    <?php
            }
       

            echo "<br>";
        echo "</div>";
        echo "</div>";


  }else{
      ?>
      <h1>All transactions are up to date</h1>
      <?php
  }
  $conn->close();
?>
 
 <a href="home3.php" class="text" style="position:fixed;top:500px;left:800px; color :blue background-color:green;">Done</a>

<a class="fancy" href="#">
                <span class="top-key"></span>
                <span class="text">Buy us a coffee</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
              </a>

</body>
</html>