<?php
  //call of the database
  $host       = "127.0.0.1:3306"; // Host name.
  $db_user    = "admin";           // mysql user
  $db_password= "admin";               // mysql pass
  $db         = 'weather';        // Database name.

  // Check connection
  $conn = new mysqli($host,$db_user,$db_password,$db);

  if (mysqli_connect_errno())
  {
    echo "logmessage : Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //echo "logmessage : Success to connect to the Mysql database  " . PHP_EOL;//test

  ?>
