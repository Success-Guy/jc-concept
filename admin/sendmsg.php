<?php
     session_start();
     if(!isset($_SESSION['param'])){
        header("location: index.php");
     }

require_once("../class/common.php");

// define variables and set to empty values
$message = $phone = $msg = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $phone = test_input($_POST["phone"]);
  $message= test_input($_POST["message"]);
  $name = test_input($_POST["name"]);
  if (strlen($phone) > 10) {

    $sta = sendMessage($phone, $message);
    if (isset($sta['status'])){
      $status = "Message sent";
      recordData($phone , $name);
    }
    else{
      $status = 'Message not sent: '.$sta['error'];
    }
  }else{
    $status = "Incorrect number, Go back to check";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Admin | JC Concept</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="body">
        <header>
            <nav class="navbar container">
                <a class="navbar-brand" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name">JC Concepts</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a>SMS Balance: <?=getPlainBalance();?></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?logout=true">Logout</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section>
            <div class=" container">
                <!-- <h1>JC Concept</h1> -->
                <div class="body-co">
                  <h1 style="font-size:22px; font-weight:normal;  margin-bottom: 20px; color:#333; text-align: center;"><?php echo $status; ?> </h1>
                    <div style="text-align:center;color:red"></div>
                    <div class="detail" id="login-form">
                        <div class="name">Detail
                        </div>
                        <div class="description">
                          <h3> Phone No:</h3>
                          <p><?=$phone; ?> </p>
                        </div>
                        <div class="description">
                            <h3>Name description:</h3>
                           <p> <?=$message ?> </p>
                        </div>

                    </div>
                    <!-- <button id="test">test</button> -->
                </div>

        </section>
        <footer>
            <nav class="navbar container">
                <a class="navbar-brand" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name">JC Concept</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#">About Us</a>
                    </li>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>

</body>

</html>