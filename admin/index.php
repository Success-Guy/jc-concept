<?php

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: index.php");
        
    }
}
    if (isset($_SESSION['param'])) {
        header("location: home.php");
        exit();
    }



// define variables and set to empty values
$usrname = $pass = $msg ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["usrname"]);
  $pass = test_input($_POST["passwd"]);
  if (("jcconcepts"==$name) & ("emilyok123"==$pass)) {
      $_SESSION['param'] =$name."-".$pass;
      header("location: home.php");
      exit();
  }else {
      $msg = "Wrong Username  or Password";
      $msg .= "<br>".$name. "-". $pass;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | JC Concept</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="body">
        <header>
            <nav class="navbar container mx-auto">
                <a class="navbar-brand  mx-auto" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name text-center">JC Concepts</span>
                </a>
            </nav>
        </header>

        <section>
            <div class=" container">
                <!-- <h1>JC Concept</h1> -->
                <div class="body-col">
                    <h1 style="font-size: 30px; margin-bottom: 20px; color:#fff; text-align: center;">ADMIN | JC CONCEPTS</h1>
                    <div style="text-align:center;color:red"><?=$msg;?></div>
                    <form class="login-form" id="login-form" action="index.php" method="POST">
                        <div class="log-input-group">
                            <label>Username:</label>
                            <input type="text" name="usrname">
                        </div>
                        <div class="log-input-group">
                            <label>Password:</label>
                            <input type="password" name="passwd">
                        </div>
                        <div class="log-input-group">
                            <button type="submit" class="btn">Authorise</button>
                        </div>
                    </form>
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
                </ul>
            </nav>
        </footer>
    </div>

</body>

</html>