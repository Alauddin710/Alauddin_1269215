<?php 
// encriyption: md5, sha1
//echo sha1("alo");

$secret= 'c90e32d1e617ff4cb0ebd4789ded7ed10981a5e7';
if(($_SERVER['PHP_AUTH_USER']!="alauddin") 
|| (hash('sha1', $_SERVER['PHP_AUTH_PW'])!=$secret)){
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials');
}
?>

Welcome to Bangladesh