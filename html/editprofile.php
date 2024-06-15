<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $fname = clean($_POST['username']);
    $lname = clean($_POST['email']);
    $course = clean($_POST['password']);
    $yrlevel = clean($_POST['phone']);

    $query = "UPDATE registration SET username = '$fname', address = '$lname', password = '$course',phone = '$yrlevel'
    WHERE id='".$_SESSION['userid']."'";
      $quer = "SELECT * FROM registration WHERE username = '$fname' ";
      $resul = mysqli_query($con, $quer);
      $row = mysqli_fetch_assoc($resul);
      $_SESSION['username'] = $row['username'];
   
    if($result = mysqli_query($con, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:home3.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Profile</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/money transcation form.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>


  <section>
    
    <div class="container">
      <strong class="title" style=" color:grey;">Edit Profile</strong>
    </div>
    

    <div >
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group">
          <label>id</label>
          
          <?php 
            $query = "SELECT id FROM registration WHERE id = '".$_SESSION['userid']."'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_row($result);

            echo "<p>".$row[0]."</p>";
          ?>

        </div>


        <div >
          <label for="firstname">Username</label>
          <input type="text"  name="username" placeholder="userName" required>
        </div>


        <div >
          <label for="email">Email</label>
          <input type="email"  name="email" placeholder="email" required>
        </div>


        <div >
          <label for="course">Password</label>
          <input type="password"  name="password" placeholder="password" required>
        </div>
        <div class="form-group">
          <label for="course">phone</label>
          <input type="text"  name="phone" placeholder="phone" required>
        </div>


    
        <div class="form-footer">
          <a href="home3.php">Go back</a>
          <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
        </div>
        

      </form>
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:home3.php");
  }

  mysqli_close($con);

?>