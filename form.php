<?php

  $servername="localhost";
  $username="root";
  $password="";
  $db="abcdb";

  $formDB_Conn = mysqli_connect($servername,$username,$password,$db);
  mysqli_connect_error();

  $namee = mysqli_real_escape_string($formDB_Conn,$_POST['namee']);
  $mobileNo = mysqli_real_escape_string($formDB_Conn,$_POST['mobileNo']);

  echo $namee;
  echo $mobileNo;

  $query = "INSERT INTO regData (`name`, `mobileNo`) VALUES ('$namee', '$mobileNo')";
  mysqli_query($formDB_Conn, $query);

  header('Location: ./thankyou.php ');




  
  
?>