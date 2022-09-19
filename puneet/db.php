<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($host, $username, $password,'test');  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  