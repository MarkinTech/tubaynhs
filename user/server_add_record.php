<?php
session_start();

  require('../user/components/dbconnect.php');

  if($_POST){
  	$qry = "INSERT INTO grade_level(grade, school, school_id, district, division, region,adviser,section,stud_no,ay) values('".strtoupper($_POST['grade'])."','".strtoupper($_POST['school'])."','".$_POST['school_id']."','".strtoupper($_POST['district'])."','".strtoupper($_POST['division'])."','".strtoupper($_POST['region'])."','".strtoupper($_POST['adviser'])."','".strtoupper($_POST['section'])."','".$_POST['stud_no']."','".$_POST['ay']."')";
  	if(mysqli_query($conn, $qry)){

  		$id = mysqli_insert_id($conn);
 //----------------------------------------------------------------------------- 		
		$qry = "INSERT INTO 1st_grading(eng1, filipino1, science1, math1, ap1, esp1,tle1,mapeh1,music1,art1,pe1,health1,no) values('".$_POST['eng']."','".$_POST['filipino']."','".$_POST['science']."','".$_POST['math']."','".$_POST['ap']."','".$_POST['esp']."','".$_POST['tle']."','".$_POST['mapeh']."','".$_POST['music']."','".$_POST['arts']."','".$_POST['pe']."','".$_POST['health']."','$id')";
			if(mysqli_query($conn, $qry)){

				
	//----------------------------------------------------------------------------- 					
						$qry = "INSERT INTO 2nd_grading(eng2, filipino2, science2, math2, ap2, esp2,tle2,mapeh2,music2,art2,pe2,health2,no) values('".$_POST['eng_sec']."','".$_POST['filipino_sec']."','".$_POST['science_sec']."','".$_POST['math_sec']."','".$_POST['ap_sec']."','".$_POST['esp_sec']."','".$_POST['tle_sec']."','".$_POST['mapeh_sec']."','".$_POST['music_sec']."','".$_POST['arts_sec']."','".$_POST['pe_sec']."','".$_POST['health_sec']."','$id')";
							if(mysqli_query($conn, $qry)){

							
	//----------------------------------------------------------------------------- 					
						$qry = "INSERT INTO 3rd_grading(eng3, filipino3, science3, math3, ap3, esp3,tle3,mapeh3,music3,art3,pe3,health3,no) values('".$_POST['eng_rd']."','".$_POST['filipino_rd']."','".$_POST['science_rd']."','".$_POST['math_rd']."','".$_POST['ap_rd']."','".$_POST['esp_rd']."','".$_POST['tle_rd']."','".$_POST['mapeh_rd']."','".$_POST['music_rd']."','".$_POST['arts_rd']."','".$_POST['pe_rd']."','".$_POST['health_rd']."','$id')";
							if(mysqli_query($conn, $qry)){

									
	//----------------------------------------------------------------------------- 					
						$qry = "INSERT INTO 4th_grading(eng4, filipino4, science4, math4, ap4, esp4,tle4,mapeh4,music4,art4,pe4,health4,no) values('".$_POST['eng_th']."','".$_POST['filipino_th']."','".$_POST['science_th']."','".$_POST['math_th']."','".$_POST['ap_th']."','".$_POST['esp_th']."','".$_POST['tle_th']."','".$_POST['mapeh_th']."','".$_POST['music_th']."','".$_POST['arts_th']."','".$_POST['pe_th']."','".$_POST['health_th']."','$id')";
							if(mysqli_query($conn, $qry)){
									  	 	$_SESSION['add-status'] = '200';
									  	 	header("location: ./home.php?page=add_student_record&id=".base64_encode($_POST['stud_no'])." ");
								 }
							}
						}
			  }
  	  }

    }

?>