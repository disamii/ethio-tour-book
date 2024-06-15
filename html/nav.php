
<?php
  // session_start();
  // if (!isset($_SESSION['user_id'])) {
  //   header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
  //   exit;
  // }
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}
.nav{
    margin-bottom:12px;
    background
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 border:1px solid black;
  position: fixed;
  top: 0;
  width: 100%;
}
li {
  float: left;
}
li a {
  display: block;
  color: black;
  font-family:sans-serif;
  font-size: 18px;
  text-align: center;
  padding: 18px 30px;
  text-decoration: none;
}
li a:hover:not(.title) {
  background-color: #ed8a18;
}
.title {
  background-color: gray;
}
</style>
</head>
<body>
   <nav class="Nav">
    <ul>
    <li>
    <a class="title" href="#">CBE</a>
   <li>
    <a href="VIEW-CUSTOMER.php">Customers Details</a>
    </li>
    <li>
    <a href="RECORD.php">Transaction History</a>
    </li>
    <li> <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>

    </ul>
   </nav>
<body>
</html>
