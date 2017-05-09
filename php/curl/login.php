<?php
$postData = array(
    'log' => 'admin',
    'pwd' => '1qaz2wsx',
    'redirect_to' => 'http://localhost/testwordpress',
    'testcookie' => '1'
);

$file = __DIR__ . DIRECTORY_SEPARATOR . "cookie.txt";

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://localhost/testwordpress/wp-login.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_COOKIESESSION => true,
    CURLOPT_COOKIEFILE => $file,
    CURLOPT_COOKIEJAR  => $file,
));

$output = curl_exec($ch);
echo $output;