<?php
  $conn = mysqli_connect('localhost:3306','root','Aru@2345','onlineleavedb');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
?>