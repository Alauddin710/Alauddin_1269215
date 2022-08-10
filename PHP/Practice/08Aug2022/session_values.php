<?php 
session_start();
print_r($_SESSION);

$_SESSION['name'] = "Dipu";

$_SESSION['age'] = 25;

//unset($_SESSION['age']); // unsent mane holo akta kore muse jabe data

session_destroy(); // session destroy mane sobgulo data muse jabe'