<?php
include_once 'env.php';

// function getPlainBalance($value = '')
// {
//     require_once 'kudisms-php-master/src/Kudisms.php';
// 
//     $kudisms = new Kudisms(getenv('JC_EMAIL'), getenv('JC_PASSWORD'), 'JC CONCEPTS');
// 
// 
//     //check sms balance 
//     $a = $kudisms->checkBalance();
// 
// 
//     //get string after char "{"
//     $c = substr($a, strpos($a, "{"));
//     // echo strpos($a, "{");
//     // echo "$c";
//     $b = json_decode($c, true);
//     // print_r($b);
//     echo $b['symbol'] . $b['balance'];
// }

function getPlainBalance() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://my.kudisms.net/api/balance',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('token' => getenv('SMS_API_KEY')),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return '₦' . json_decode($response)->msg;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// function sendMessages($number, $message)
// {
// 
//     require_once 'kudisms-php-master/src/Kudisms.php';
// 
//     $kudisms = new Kudisms(getenv('JC_EMAIL'), getenv('JC_PASSWORD'), 'JC CONCEPTS');
// 
//     //check sms balance 
//     $a = $kudisms->sendsms($number, $message);
// 
//     //get string after char "{"
//     $c = substr($a, strpos($a, "{"));
// 
//     $b = json_decode($c, true);
// 
//     return $b;
// }
function sendMessage($number, $message) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://my.kudisms.net/api/sms',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('token' => getenv('SMS_API_KEY'), 'senderID' => 'JCConcepts', 'recipients' => $number, 'message' => $message, 'gateway' => '2'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;

}
function getUrl($value) {

    $obj = json_decode($value);
    if ($obj->status) {
        return $obj->data->authorization_url;
    } else {
        echo $obj->status . " " . $obj->message;
        // header("Location:javascript://history.go(-1)");
    }
}


function recordData($phone, $name) {

    $servername = getenv("DB_SERVER");
    $username   = getenv("DB_USERNAME");
    $password   = getenv("DB_PASSWORD");
    $dbname     = getenv("DB_NAME");

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
