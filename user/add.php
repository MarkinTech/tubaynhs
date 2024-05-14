<?php
  session_start();

    require('../user/components/dbconnect.php');



	if($_POST){

		if(isset($_POST['submit_add'])){



			$query = "INSERT INTO student(fname,mname,lname,ext,lrn,dob,age,gender,elem_school,elem_school_id,gen_avg, elem_address,user_id) values('".strtoupper($_POST['fname'])."', '".strtoupper($_POST['mname'])."', '".strtoupper($_POST['lname'])."','".strtoupper($_POST['ext'])."','".$_POST['lrn']."', '".$_POST['dob']."','".$_POST['age']."','".$_POST['gender']."', '".strtoupper($_POST['elem_school'])."','".$_POST['elem_school_id']."','".$_POST['gen_avg']."','".strtoupper($_POST['elem_address'])."','".$_SESSION['user']['user_id']."')";

			if(mysqli_query($conn,$query)){
				$_SESSION['add-student-status'] = '200';
				header('location: ../user/home.php');

			}

			
			


		}


	}




	if($_POST){

		if(isset($_POST['submit_edit'])){



			$query = "UPDATE student SET fname ='".strtoupper($_POST['fname'])."' ,mname ='".strtoupper($_POST['mname'])."' ,lname=  '".strtoupper($_POST['lname'])."',ext='".strtoupper($_POST['ext'])."' ,lrn= '".$_POST['lrn']."',dob= '".$_POST['dob']."',age='".$_POST['age']."' ,gender='".$_POST['gender']."' ,elem_school='".strtoupper($_POST['elem_school'])."' ,elem_school_id='".$_POST['elem_school_id']."' ,gen_avg= '".$_POST['gen_avg']."', elem_address= '".strtoupper($_POST['elem_address'])."',user_id= '".$_SESSION['user']['user_id']."' where stud_NO= '".$_POST['stud_no']."' ";

			if(mysqli_query($conn,$query)){
				$_SESSION['edit-student-status'] = '200';
				header('location: ./home.php?page=edit-info&id='.base64_encode($_POST['stud_no']).'');

			}

			
			


		}


	}








?>