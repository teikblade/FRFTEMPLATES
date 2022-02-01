<?php
include 'vars.php';


/* Get our date for timestamp */
$d = date("Y-m-d h:i:sa");

/* Log Requests to handler */
$file = '/tmp/handler.log';

$data = "[ START ]\nType: " . $reqMet . "\nTime: " . $d  . "\nReq From IP: " . $remAddr . "\nRequest URL: " . $reqUri . "\nReferer URL: " . $reffer . "\nUser  Agent: " . $hdrAgnt . "\n[  END  ]\n\n\n";
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);



if(!isset($_SERVER['HTTP_REFERER'])) 
{
header("HTTP/1.0 404 Not Found");
include "404.php";
} else {
header("HTTP/1.0 200 OK");
include "200.php";
}
?>
