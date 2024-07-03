<?php

$conn = mysqli_connect("localhost","root","","test_php_connector");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";


?>