<?php

$user = $_POST["myLogin"];
$pswd = $_POST["myPassword"];

if (!empty($user) && !empty($pswd)){
  $servername = "js.ccpttnayn2zz.us-west-1.rds.amazonaws.com";
  $username = "admin";
  $password = "deshammu01";
  $conn = new mysqli($servername, $username, $password);
  if ($conn->connect_error) {
      $message = "wrong answer";
      echo "<script type='text/javascript'>alert('$message');</script>";
      die("Connection failed: " . $conn->connect_error);
      alert
  }
  else{
    $message = "good answer";
    echo "<script type='text/javascript'>alert('$message');</script>";
    while($row = mysqli_fetch_assoc($conn)){
      echo $row;
    }

  }
}
else{
  echo "error";
}
?>
