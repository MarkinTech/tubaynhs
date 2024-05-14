<?php

session_start();
require('../sf10-jhs/components/dbconnect.php');


if($_POST){


  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($conn,$username);
  $password = mysqli_real_escape_string($conn,$password);


	 $qry = "INSERT INTO user(username, password, fname,mname,lname,position) values('". $username."','". $password ."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['position']."')";
	 if(mysqli_query($conn, $qry)){
	 	header('location: ./index.php');
	 }
}

?>