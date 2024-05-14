<?php

session_start();
require('components/dbconnect.php');


  if($_POST){


  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($conn,$username);
  $password = mysqli_real_escape_string($conn,$password);


  		$qry = "SELECT * from user where username = '".$username."' and password = '".$password."' ";
  		$res = mysqli_query($conn, $qry);
      if(mysqli_num_rows($res)>0){
           $row = mysqli_fetch_array($res);
            $_SESSION['user'] = $row;

            sleep(1);
                 header('location: ../sf10-jhs/user/home.php');
      }
     
      else{

                $_SESSION['failed'] ='200';
                header('location: ../sf10-jhs/index.php');
    
         }
      
      

  }	
 


?>