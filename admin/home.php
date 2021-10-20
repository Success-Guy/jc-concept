<?php
// define variables and set to empty values
$usrname = $pass = $msg ="";

    session_start();
        if(!isset($_SESSION['param'])) header("location: index.php");
    

require_once('../class/common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | JC Concept</title>
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
                <div class="body-col">
                    <h1 style="font-size:22px; font-weight:normal;  margin-bottom: 20px; color:#fff; text-align: center;">Enter name to search</h1>
                    <div style="text-align:center;color:red"><?=$msg;?></div>
                    <form class="login-form" id="login-form" action="search.php" method="POST">
                        <div class="log-input-group">
                            <!-- <label>Username:</label> -->
                            <input type="text" name="search-keyword" placeholder="Charles">
                        </div>
                        <div class="log-input-group">
                            <button type="submit" class="btn">Search Name</button>
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