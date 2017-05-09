<a href="index.html">Go to Index</a><br/>
<?php
//https://www.startutorial.com/articles/view/php-curl
//Retrieve a Web Page

$ch = curl_init();

/*curl_setopt($ch,CURLOPT_URL,"http://www.google.com/search?q=curl");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HEADER, false); //Set option for CURLOPT_HEADER, false will tell curl to ignore the header in the return value.*/

curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'http://www.google.com/search?q=curl',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false //Set option for CURLOPT_HEADER, false will tell curl to ignore the header in the return value.
));

//Execute and fetch/send data from/to server
$result=curl_exec($ch);
//Close the session
curl_close($ch);
//Output the return string.
echo $result;
