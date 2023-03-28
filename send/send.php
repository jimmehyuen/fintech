<?php
session_start();

//if (!isset($data["token"]) || !isset($_SESSION["token"])) { exit(); }
//if ($data["token"] !== $_SESSION["token"]) { exit(); }

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$data = $_POST;

$captcha = filter_var($data['token'], FILTER_SANITIZE_STRING);
if(!$captcha){
    echo 'Please check the the captcha form.';
    exit;
}
$secretKey = "6LeqiwceAAAAAOkEzYAiVsp-Ty5U8-85r1uej6DE";
$token = $data["g-recaptcha-response"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secretKey, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if($arrResponse["success"] && $arrResponse["action"] == "contactform" && $arrResponse["score"] >= 0.5) {

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@veloxfintech.com';           //SMTP username
    $mail->Password = 'hQl0Vd384OPu';                     //SMTP password
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom('website@veloxfintech.com', 'velox');
    $mail->addAddress('info@veloxfintech.com');

    $mail->isHTML(true);
    $mail->Subject = 'Request from velox website';
    $mail->Body = 'Name: ' . filter_var($data["firstname"], FILTER_SANITIZE_STRING)." ".filter_var($data["lastname"], FILTER_SANITIZE_STRING) . "<br/>Company: " . filter_var($data["company"], FILTER_SANITIZE_STRING) . "<br/>Title/Role: " . filter_var($data["title"], FILTER_SANITIZE_STRING) . "<br/>Country: " . filter_var($data["country"], FILTER_SANITIZE_STRING). "<br/>E-Mail: " . filter_var($data["email"], FILTER_SANITIZE_STRING). "<br/>Phone: " . filter_var($data["phone"], FILTER_SANITIZE_STRING). "<br/>Message: " . filter_var($data["message"], FILTER_SANITIZE_STRING);

    try {
      $response = $mail->send();
    } catch (Exception $e) {
      var_dump($e);
    }
    echo json_encode(array('success' => 'true'));
} else {
    echo json_encode(array('success' => 'false'));
}

return;

?>