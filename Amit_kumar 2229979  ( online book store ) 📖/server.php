<?php
session_start();

// initializing variables
$username = "amit";
$email    = "amit6871806@gmail.com";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'amit');
?>