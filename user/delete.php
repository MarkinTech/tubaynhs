<?php
session_start();


  require('../user/components/dbconnect.php');

if($_POST){
  if(isset($_POST['delete-student'])){
  		$qry = "DELETE FROM student where stud_no ='".$_POST['delete-student']."'";
      if(mysqli_query($conn, $qry)){
        $_SESSION['del-status'] = '200';
        header("location: ./home.php?page=view");
      }
      else{
        echo 'error';
      }
  }
 }

?>