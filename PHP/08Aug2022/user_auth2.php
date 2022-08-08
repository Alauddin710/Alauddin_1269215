<?php 

// encryption technic : md,sha1

//echo sha1('alauddin');

$secret = 'e49c8a8d3c3234132da39f89a479fb809dd51970'; // filebase auth;
if (($_SERVER['PHP_AUTH_USER'] != 'alo') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
 }
?>

Hello