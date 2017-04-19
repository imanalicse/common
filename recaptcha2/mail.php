<?php
$name=stripslashes($_POST["name"]);
$email=stripslashes($_POST["email"]);
$message=stripslashes($_POST["message"]);
$secret="6LcSrB0UAAAAAN5zTFu1CPRT3cFWAh6au68COPdg";
$response=$_POST["captcha"];

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);

if ($captcha_success->success==false) {
    echo 0;
}
else if ($captcha_success->success==true) {
    echo 1;
}