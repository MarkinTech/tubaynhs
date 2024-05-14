<?php
session_start();

  require('../user/components/dbconnect.php');

  if($_POST){
  	$qry = "update grade_level set  grade='".strtoupper($_POST['grade'])."', school ='".strtoupper($_POST['school'])."', school_id='".$_POST['school_id']."', district='".strtoupper($_POST['district'])."', division='".strtoupper($_POST['division'])."', region='".strtoupper($_POST['region'])."', adviser='".strtoupper($_POST['adviser'])."', section='".strtoupper($_POST['section'])."', ay= '".$_POST['ay']."' where no = '".$_POST['no']."' ";
  	if(mysqli_query($conn, $qry)){

  		
 //----------------------------------------------------------------------------- 		
		$qry = "update 1st_grading set eng1='".$_POST['eng']."', filipino1='".$_POST['filipino']."', science1='".$_POST['science']."', math1='".$_POST['math']."',ap1='".$_POST['ap']."',esp1 ='".$_POST['esp']."', tle1='".$_POST['tle']."', mapeh1='".$_POST['mapeh']."', music1='".$_POST['music']."', art1='".$_POST['arts']."',pe1='".$_POST['pe']."', health1='".$_POST['health']."' where no = '".$_POST['no']."' ";
			if(mysqli_query($conn, $qry)){

				
	//----------------------------------------------------------------------------- 					
				$qry = "update 2nd_grading set eng2='".$_POST['eng_sec']."', filipino2='".$_POST['filipino_sec']."', science2='".$_POST['science_sec']."', math2='".$_POST['math_sec']."',ap2='".$_POST['ap_sec']."',esp2 ='".$_POST['esp_sec']."', tle2='".$_POST['tle_sec']."', mapeh2='".$_POST['mapeh_sec']."', music2='".$_POST['music_sec']."', art2='".$_POST['arts_sec']."',pe2='".$_POST['pe_sec']."', health2='".$_POST['health_sec']."' where no = '".$_POST['no']."' ";
				if(mysqli_query($conn, $qry)){

							
	//----------------------------------------------------------------------------- 					
					$qry = "update 3rd_grading set eng3='".$_POST['eng_rd']."', filipino3='".$_POST['filipino_rd']."', science3='".$_POST['science_rd']."', math3='".$_POST['math_rd']."',ap3='".$_POST['ap_rd']."',esp3 ='".$_POST['esp_rd']."', tle3='".$_POST['tle_rd']."', mapeh3='".$_POST['mapeh_rd']."', music3='".$_POST['music_rd']."', art3='".$_POST['arts_rd']."',pe3='".$_POST['pe_rd']."', health3='".$_POST['health_rd']."' where no = '".$_POST['no']."' ";
					if(mysqli_query($conn, $qry)){

									
	//----------------------------------------------------------------------------- 					
						$qry = "update 4th_grading set eng4='".$_POST['eng_th']."', filipino4='".$_POST['filipino_th']."', science4='".$_POST['science_th']."', math4='".$_POST['math_th']."',ap4='".$_POST['ap_th']."',esp4 ='".$_POST['esp_th']."', tle4='".$_POST['tle_th']."', mapeh4='".$_POST['mapeh_th']."', music4='".$_POST['music_th']."', art4='".$_POST['arts_th']."',pe4='".$_POST['pe_th']."', health4='".$_POST['health_th']."' where no = '".$_POST['no']."' ";
					       if(mysqli_query($conn, $qry)){
									  	 	$_SESSION['update-status'] = '200';
									  	 	header("location: ./home.php?page=edit_student_record&d=".base64_encode($_POST['no'])." ");
								 }
							}
						}
			  }
  	  }

    }

?>