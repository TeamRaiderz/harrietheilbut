<?php

if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){
 
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if(strcmp($username, "admin") == 0 && strcmp($password, "admin") == 0){
    header("location: ./home.php");
  } else {
    header("location: ./index.php");
  }
  
} else {
  header("location: ./index.php");
}

?>