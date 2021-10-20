<?php
include_once 'env.php';

function getPlainBalance($value = '')
{
    require_once 'kudisms-php-master/src/Kudisms.php';

    $kudisms = new Kudisms(getenv('JC_EMAIL'), getenv('JC_PASSWORD'), 'JC CONCEPTS');


    //check sms balance 
    $a = $kudisms->checkBalance();


    //get string after char "{"
    $c = substr($a, strpos($a, "{"));
    // echo strpos($a, "{");
    // echo "$c";
    $b = json_decode($c, true);
    // print_r($b);
    echo $b['symbol'] . $b['balance'];
}
// getPlainBalance();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sendMessage($number, $message)
{

    require_once 'kudisms-php-master/src/Kudisms.php';

    $kudisms = new Kudisms(getenv('JC_EMAIL'), getenv('JC_PASSWORD'), 'JC CONCEPTS');

    //check sms balance 
    $a = $kudisms->sendsms($number, $message);

    //get string after char "{"
    $c = substr($a, strpos($a, "{"));

    $b = json_decode($c, true);

    return $b;
}
function getUrl($value)
{

    $obj = json_decode($value);
    if ($obj->status) {
        return $obj->data->authorization_url;
    } else {
        echo $obj->status . " " . $obj->message;
        // header("Location:javascript://history.go(-1)");
    }
}


function recordData($phone, $name)
{

    $servername = getenv("DB_SERVER");
    $username = getenv("DB_USERNAME");
    $password = getenv("DB_PASSWORD");
    $dbname = getenv("DB_NAME");

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO logs (name, phone)
    VALUES ('$name', '$phone')";

    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
