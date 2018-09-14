<?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname   = "test";

  $connect = new mysqli($hostname, $username, $password, $dbname);

 // Check Connection.

  if($connnect->connect_errno){
    echo "Connection Error : " . $connect->connect_error;
  } else {
    echo "Successfully Connected.";
  }
