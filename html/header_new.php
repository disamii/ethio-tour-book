<?php 

  // session_start();
  $HOSTNAME = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '';
  $DATABaSE = 'bookforms';
  $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
        if(!$conn)
        {
          die(mysqli_error($conn).'error occured'); 
        }
  $url = $_SERVER['PHP_SELF'];
  $basename = basename($url , '.php');
  $current_page = basename($_SERVER['PHP_SELF']);
  $menu_items = [
    'about-us.php' => 'About-us',
    'Hotels.php' => 'Hotels',
    'money transaction.php' => 'Bookings',
    'travel packeges.php' => 'Ready travel packages',
    '' => 'Tour Category',
    'destination.php' => 'Top Destinations',
    'home3.php' => 'Home'
  ];
  // if(isset($_SESSION['username'], $_SESSION['password'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/gallery.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
  <!-- <link rel="stylesheet" href="../css/login - Copy.css">
  <link rel="stylesheet" href="../css/sign up.css">
  <link rel="stylesheet" href="../css/style.css"> -->
  <style>
    .pls {
      position: absolute;
      top: 0px;
      left: 1px;
    }
    .n2{
      float:left;
      display:flex;
    }
    .dropdown-menu li a:hover {
      background-color: black;
      /* color: white; */
    }
  </style>
</head>

<body>
  <script src="../js/bom.js"></script>
  <div class="full">
    <header>

      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
      </script>

      <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div class="c1 ">

        <div class="over">

          <img src="../image/output-onlinepngtools (1).png">

          <div class="inner">

            <h2> <span>COME </span><span style="color: rgb(221, 41, 41);">ALONG </span> </h2>
            <p>ON A <b style="color: rgb(103, 100, 100);font-weight: 30px;">WONDEROUESS</b> JOURNEY TO THE <b
                style="color: rgb(106, 102, 102)">PINAKLE</b> OF <br> <b> NATURE </b>AND HISTORY</p>
            <p> <svg height="40" margin-left:600px; viewBox="0 0 48 48" width="40" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h48v48h-48z" fill="none" />
                <path fill="#D9C5C5"
                  d="M23.99 4c-11.05 0-19.99 8.95-19.99 20s8.94 20 19.99 20c11.05 0 20.01-8.95 20.01-20s-8.96-20-20.01-20zm13.85 12h-5.9c-.65-2.5-1.56-4.9-2.76-7.12 3.68 1.26 6.74 3.81 8.66 7.12zm-13.84-7.93c1.67 2.4 2.97 5.07 3.82 7.93h-7.64c.85-2.86 2.15-5.53 3.82-7.93zm-15.48 19.93c-.33-1.28-.52-2.62-.52-4s.19-2.72.52-4h6.75c-.16 1.31-.27 2.64-.27 4 0 1.36.11 2.69.28 4h-6.76zm1.63 4h5.9c.65 2.5 1.56 4.9 2.76 7.13-3.68-1.26-6.74-3.82-8.66-7.13zm5.9-16h-5.9c1.92-3.31 4.98-5.87 8.66-7.13-1.2 2.23-2.11 4.63-2.76 7.13zm7.95 23.93c-1.66-2.4-2.96-5.07-3.82-7.93h7.64c-.86 2.86-2.16 5.53-3.82 7.93zm4.68-11.93h-9.36c-.19-1.31-.32-2.64-.32-4 0-1.36.13-2.69.32-4h9.36c.19 1.31.32 2.64.32 4 0 1.36-.13 2.69-.32 4zm.51 11.12c1.2-2.23 2.11-4.62 2.76-7.12h5.9c-1.93 3.31-4.99 5.86-8.66 7.12zm3.53-11.12c.16-1.31.28-2.64.28-4 0-1.36-.11-2.69-.28-4h6.75c.33 1.28.53 2.62.53 4s-.19 2.72-.53 4h-6.75z" />
              </svg> <button id="google_translate_element"
                style="margin-left:10px; margin-top:; background-color:transparent; background-image:none;"></button>
            </p>
          </div>

        </div>
      </div>

    </header>
    <nav style="position: sticky;top: 0; z-index: 999;">
      <ul class="main">

        <span class="menu">
          <!-- <?php
        // include "db_conn.php";
        // $sql = "SELECT * FROM registration";
        // $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result);       
        ?> -->
          <?php foreach($menu_items as $menu_item => $title) { 
                  $class = ($basename . ".php" == $menu_item) ? 'selected' : '';
                  if($title !== "Tour Category") {
                    echo "<li class='n'><a href='$menu_item' class='$class'>$title</a></li>";
                  } else {
                      echo "<li class='no'><a href='$menu_item' class=''>$title</a>
                                <ul>
                                <li><a href='../html/cultural tour.html'>Cultural </a> </li>
                                <li><a href='../html/adventure.html'> Nature</a></li>
                                <li><a href='../html/heritage.html'> Heritages</a></li>
                                <li><a href='../html/holiday tour.html'> Holiday</a></li>
                                <li><a href='../html/spritual .html'> spritual</a></li>
                              </ul>
                            </li>";
                  }}
          ?>
<!-- 
          <div class="pls">
            <li class="n2" >
              <img src="../image/user.png" alt="" class="img img-primary dropdown-toggle" type="img"
                data-toggle="dropdown" style="width: 30px;height:30px; style=position:fixed;top:100px;left10px;">
              <span class="caret"></span> </button>
              <ul class="dropdown-menu">
                <li> <a href="editprofile.php">EDIT<span class="fa-solid fa-pen-to-square fs-5 me-3"
                      aria-hidden="true"></span></a></li>
                <li> <a href="logout.php">LOG OUT<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
                </li>
              </ul>
              <div class="welcome" style="color:black;padding:5px;">
                <?php
    //  echo "WELCOME:"." <a href='home3.php'style='text-decoration:none; color:blue;'>".
    //  $_SESSION['username'].
    //  "</a>!";?>
            </li>
          </div>
          </li>
  </div>
  </li>
  </span>
  </div>
  </nav> -->

</body>

</html>
<?php
// }
// else{
//     header("location:index3.php");
// }
?>