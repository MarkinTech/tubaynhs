<?php

session_start();

	unset( $_SESSION['grade']);
	unset( $_SESSION['ay']);
  require('../user/components/dbconnect.php');

  if($_POST){
  
	
  	if(isset($_POST['select'])){
  		
            $_SESSION['grade'] = $_POST['grade'];
            $_SESSION['ay'] = $_POST['ay'];
        }
       
  
  	header('location: ./home.php?page=view');
  }
  else{
  	header('location: ./home.php?page=view');
  }

?>