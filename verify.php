<?php
session_start();
require_once('class/paystack.php');
?>
<?php
if (isset($_GET['reference'])) {

    $ref = rawurlencode($_GET['reference']);
    $result = verify($ref);
    $result = json_decode($result);
    // header("Content-Type: application/json");
    // echo $result;

    // echo "Status: ". $result->data->status ."<br>";
    // $amt = $result->data->amount/100;
    // echo "Amount: &#8358<span>" .$amt."</span><br>";
    // echo "Name: ".$result->data->metadata->customer->name."<br>";
    // echo "Email: ".$result->data->metadata->customer->phone."<br>";
    $_SESSION['phone'] = $result->data->metadata->customer->phone;
    $_SESSION['name'] = $result->data->metadata->customer->name;
    header("location: search.php");
} else {
    header("location:/");
}

?>