<?php
 session_start();
//  require 'connect.php'; 
//  require 'functions.php'; 
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABaSE = 'bookforms';
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
      if(!$conn)
      {
        die(mysqli_error($conn).'error occured'); 
    }
    // else {
    //     $_SESSION['error'] = mysqli_error($conn) . 'error occurred';
    //     header("Location: login.php");
    //     exit();
    // }
   $uname = $_POST['username']; 
   $pword = $_POST['password']; 
   $email=$_POST['email'];
   $error ='TRUE';
   if(!$uname)
 {
    $query = "SELECT * FROM registration WHERE address ='$email' AND password = '$pword'"; 
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result); 
    if($row>0)
    {
            $_SESSION['user_id'] = $row['id']; 
            $_SESSION['username'] = $row['username']; 
            $_SESSION['password'] = $row['password']; 
            $_SESSION['role'] = $row['role']; 
            header('location:money transaction.php');
            
            //  echo "<script type='text/javascript'> window.location.href='money transaction.php';</script>";              
             exit;
       }
         else{ 
            
            if ($error) {
                $_SESSION['error'] = "unmatched password and email";
                header("Location: login.php");
                exit();
               }
         
    }
    
    }
    
   elseif(!$email)
   {
            $query = "SELECT * FROM registration WHERE username ='$uname' AND password = '$pword'"; 
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_assoc($result); 
            if($row>0)
            {
                    $_SESSION['user_id'] = $row['id']; 
                    $_SESSION['username'] = $row['username']; 
                    $_SESSION['password'] = $row['password']; 
                    $_SESSION['role'] = $row['role']; 

                    if($row["username"] && $row["role"] =='SUPERADMIN' ) 
                    {  
                            echo "<script type='text/javascript'> window.location.href='index2.php';</script>"; 
                    } 
                    else if($row["username"] && $row["role"] =='BANKADMIN' ) 
                    { 
                        echo "<script type='text/javascript'> window.location.href='VIEW-CUSTOMER.php';</script>";              
                    }    
                    else if($row["username"] && $row["role"] =='ADMINTOUR' ) 
                    { 
                        echo "<script type='text/javascript'> window.location.href='Admin tour.php';</script>";              
                    }     
                    else if($row["username"] && $row["role"] =='USER' ) 
                    { 
                    echo "<script type='text/javascript'> window.location.href='home3.php';</script>";              
                    }
                    else{ 
                            // echo "<script type='text/javascript'>window.location.href='index.php';</script>"; 
                            if ($error) {
                                $_SESSION['error'] = "There was an error with your submission.";
                                header("Location: index.php");
                                exit();
                               }
                    } 
           }
                else{
                    // echo "<script type='text/javascript'>window.location.href='index.php?#login-form';</script>"; 
                if ($error) {
                    $_SESSION['error'] = "unmatched password  and username.";
                    header("Location: index.php");
                    exit();
                   }
                }
               
   } 
   
 mysqli_close($conn); 

?>