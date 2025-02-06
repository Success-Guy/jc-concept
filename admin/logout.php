<?php
session_start();
session_destroy();
header("location: /index.php");
//  print_r($_SESSION)
// exit();
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
        <!--     <header>
            <nav class="navbar container">
                <a class="navbar-brand" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name">JC Concepts</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="member.php">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="receipt.php">Receipt</a>
                    </li>
                    <li class="nav-item">
                        <a href="transfer.php">Send Money</a>
                    </li>
                </ul>
            </nav>
        </header> -->

        <section>
            <div class=" container">
                <!-- <h1>JC Concept</h1> -->
                <div class="body-col">
                    <h1 style="font-size: 30px; margin-bottom: 20px; color:#fff; text-align: center;">JC CONCEPTS</h1>
                    <div style="text-align:center;color:red"><?= $msg; ?></div>
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

    <script src="js/index.js" type="module"></script>
</body>

</html>