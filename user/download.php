
<?php
 session_start();


 
 if($_POST){
    include '../user/components/dbconnect.php';
    $filename ="sf10.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition:attachment;filename=\"$filename\""); 


?>
 



	   <?php
             $output='';
	      $query = "SELECT * FROM student 
	                inner join grade_level
	                on grade_level.stud_no = student.stud_no
	                inner join 1st_grading
	                on 1st_grading.no = grade_level.no
	                where student.stud_no = '".$_POST['id']."'";
	      $res = mysqli_query($conn, $query);

	 
	    if(mysqli_num_rows($res)>0){
	         $row = mysqli_fetch_array($res);
	       

	   
                                  


       $output.= ' <style class="">
                                   
                                    td{
                                        whitespace: no-wrap;
                                       
                                        font-size: 20px;
                                        border:1px solid gray;
                                        padding: 2px;
                                    }
                                   
                                   
                                </style>  

          <table  style="width:1200px" >
            <thead">
              
               <tr> <td colspan="10" style="text-align:left;border-bottom: none;" >
                    <small> SF 10-JHS </small><br>
                   
                          
                </td>
               </tr>

               <tr>
                <td colspan="10" style="text-align:center; border-bottom: none;border-top: none;" >
                    <img src="http://localhost/sf10-jhs/img/depedlogo1.png" width="35" style="position: absolute; left:15px">
                     <img src="http://localhost/sf10-jhs/img/depedlogo2.png" width="65" style="position: absolute; right:65px">    
                    <small> Republic of the Philippines </small><br>
                    <small> Department of Education </small>
                     
                </td>
               
            </tr>
          
            <tr>
               
                <td colspan="10" style="text-align:center; font-weight: bold; border-top: none; border-bottom: none;  font-size: 20px;" >Learner Permanent Record for Junior High School (SF10-JHS)<br>         
                </td>
               
            </tr>
             <tr>
               
                <td colspan="10" style="text-align:center;border-top: none;" >
                    <i> (Formerly Form 137) </i>
                          
                </td>
               
            </tr>
            <tr>
            <tr>
                <td colspan="10" id="header1" style="font-weight:bold;   text-align: center; 
        background-color: #e6ffb3;   ">LEARNERS INFORMATION</td>
            </tr>
            <tr>   
                <td colspan="2">LAST NAME: '.$row["lname"].'</td>
                <td colspan="3">FIRST NAME: '.$row["fname"].' </td>
                <td colspan="2">NAME EXTN(Jr.,Sr.): '.$row["ext"].' </td>
                <td colspan="3">MIDDLE NAME: '.$row["mname"].'</td>
               
            </tr>
            <tr>   
                <td colspan="3">Learners Reference Number(LRN): '.$row["lrn"].'</td>
                <td colspan="3">Birthdate(yyyy/mm/dd):   '.$row["dob"].' </td>
                <td colspan="3">Sex :  '.$row["gender"].'</td>
                <td colspan="1"></td>
               
            </tr>
            <tr >
          <td colspan="10" id="header1" style=" font-weight:bold;  text-align: center; 
        background-color: #e6ffb3;   ">ELIGIBILITY FOR JHS ENROLLMENT</td>
            </tr>
            <tr >   
                <td colspan="4" ><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Type of Completion: Elementary School Completer</td>
                <td colspan="2">General Average:  '.$row["gen_avg"].'</td>
                <td colspan="4">Citation(if any): </td>
                
            </tr>
            <tr >   
                <td colspan="10">Name of School:  '.$row["elem_school"].'&nbsp;&nbsp; School ID:  '.$row["elem_school_id"].'&nbsp;&nbsp;  Address of School:  '.$row["elem_address"].' </td>
              
            </tr>
            <tr>   
                <td colspan="10" style="border-top: 1px solid black">Other Credential Presented</td>  
            </tr>
            <tr >   
                <td colspan="3"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PEPT Passer Rating: ________</td>
                <td colspan="3"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ALS A&E Passer Rating: ________</td>
                <td colspan="4"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Others(Pls. Specify): ________</td>
              
            </tr>
            <tr >   
                <td colspan="5" style="text-align:center" > Date of Examination/Assessment(mm/dd/yyyy): _____________</td>
                <td  colspan="5" style="text-align:center"> Name and Address of Testing Center: _______________</td>
              
              
            </tr>

       </thead>
       <tbody>
       <tr >   
              <td colspan="10" id="header1" style="   text-align: center; 
        background-color: #e6ffb3; font-weight:bold;  ">SCHOLASTIC RECORD</td>
            </tr>
       '; 


           $query = "SELECT * FROM student 
                    inner join grade_level
                    on grade_level.stud_no = student.stud_no
                    inner join 1st_grading
                    on 1st_grading.no = grade_level.no
                     inner join 2nd_grading
                    on 2nd_grading.no = grade_level.no
                     inner join 3rd_grading
                    on 3rd_grading.no = grade_level.no
                     inner join 4th_grading
                    on 4th_grading.no = grade_level.no
                    where student.stud_no = '".$_POST['id']."'";
          $res = mysqli_query($conn, $query);

     
        if(mysqli_num_rows($res)>0){
             while($row = mysqli_fetch_array($res)):

      
              


            $output.=' 
            <tr>   
                <td colspan="10">School: '.$row['school'].'&nbsp;&nbsp; School ID:  '.$row['school_id'].'&nbsp;&nbsp; District:  '.$row['district'].'&nbsp;&nbsp; Division:   '.$row['division'].'&nbsp;&nbsp; Region:  '.$row['region'].' </td>
            </tr>
            <tr>   
                <td colspan="5">Classified as Grade:  '.$row['grade'].'  &nbsp;&nbsp; Section:  '.$row['section'].' &nbsp;&nbsp; School Year:  '.$row['ay'].'  &nbsp;&nbsp; </td>
                <td  colspan="3">Name of Adviser/Teacher:  '.$row['adviser'].'</td>
                <td  colspan="2">Signature:</td>
            </tr>
            <tr style="height: 40px">   
                <td colspan="2" style="text-align:center" >LEARNING AREAS</td>
                <td colspan="4" style="text-align:center">QUARTER</td>
                <td style="text-align:center">FINAL</td>
                <td colspan="3" style="text-align:center">REMARKS</td>
            </tr>
            <tr >   
                <td colspan="2"></td>
                <td style="text-align:center; border:1px solid gray" >1</td>
                <td style="text-align:center;  border:1px solid gray">2</td>
                <td style="text-align:center;  border:1px solid gray">3</td>
                <td style="text-align:center;  border:1px solid gray">4</td>
                <td style="text-align:center">RATING</td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Filipino</td>
                <td id="subjects" > '.$row['filipino1'].'</td>
                <td id="subjects" > '.$row['filipino2'].'</td>
                 <td id="subjects" > '.$row['filipino3'].'</td>
                  <td id="subjects" > '.$row['filipino4'].'</td>
                    <td >'; 
                    $fil_remark=0;  
                    if($row['filipino4']!=''){ 
                       
                        $fil_remark =(($row['filipino1']+$row['filipino2']+$row['filipino3']+$row['filipino4'])/4); 
                 $output.= $fil_remark.'</td>';
                        }
                   
                    if($fil_remark!=0){
                         if($fil_remark>75){
                     $output.= ' <td colspan="3"> Passed';
                         }
                         else{
                      $output.= ' <td colspan="3"> Failed';
                         }
                    }
                   if($fil_remark==0){
                      $output.= ' <td colspan="3"> Incomplete';
                     }

            
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">English</td>
                <td id="subjects" > '.$row['eng1'].'</td>
                <td id="subjects" > '.$row['eng2'].'</td>
                <td id="subjects" > '.$row['eng3'].'</td>
                <td id="subjects" > '.$row['eng4'].'</td>
                   <td >'; 
                    $eng_remark=0;  
                    if($row['eng4']!=''){ 
                       
                        $eng_remark =(($row['eng1']+$row['eng2']+$row['eng3']+$row['eng4'])/4); 
                 $output.= $eng_remark.'</td>';
                        }
                   
                    if($eng_remark!=0){
                         if($eng_remark>75){
                     $output.= ' <td colspan="3"> Passed';
                         }
                         else{
                      $output.= ' <td colspan="3"> Failed';
                         }
                    }
                   if($eng_remark==0){
                      $output.= ' <td colspan="3"> Incomplete';
                     }
                  
                  else{
                     $output.='</td>';
                     }

            
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">Mathematics</td>
                <td id="subjects" > '.$row['math1'].'</td>
                 <td id="subjects" > '.$row['math2'].'</td>
                  <td id="subjects" > '.$row['math3'].'</td>
                   <td id="subjects" > '.$row['math4'].'</td>
                 <td >'; 
                    $math_remark=0;  
                    if($row['math4']!=''){ 
                       
                        $math_remark =(($row['math1']+$row['math2']+$row['math3']+$row['math4'])/4); 
                 $output.= $math_remark.'</td>';
                        }
                   
                    if($math_remark!=0){
                         if($math_remark>75){
                             $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($math_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                          else{
                             $output.='</td>';
                             }

                    
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">Science</td>
                <td id="subjects" > '.$row['science1'].'</td>
                <td id="subjects" > '.$row['science2'].'</td>
                <td id="subjects" > '.$row['science3'].'</td>
                <td id="subjects" > '.$row['science4'].'</td>
               <td >'; 
                      $science_remark=0;  
                    if($row['science4']!=''){ 
                       
                        $science_remark =(($row['science1']+$row['science2']+$row['science3']+$row['science4'])/4); 
                 $output.= $science_remark.'</td>';
                        }
                   
                    if($science_remark!=0){
                         if($science_remark>75){
                               $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($science_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                            else{
                             $output.='</td>';
                             }
                 

            
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">Araling Panlipunan(AP)</td>
                <td id="subjects" > '.$row['ap1'].'</td>
                <td id="subjects" > '.$row['ap2'].'</td>
                <td id="subjects" > '.$row['ap3'].'</td>
                <td id="subjects" > '.$row['ap4'].'</td>
               <td >'; 
                     $ap_remark=0;  
                    if($row['ap4']!=''){ 
                       
                        $ap_remark =(($row['ap1']+$row['ap2']+$row['ap3']+$row['ap4'])/4); 
                 $output.= $ap_remark.'</td>';
                        }
                    
                    if($ap_remark!=0){
                         if($ap_remark>75){
                                $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($ap_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                            else{
                             $output.='</td>';
                             }
                 
            
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">Technology and Livelihood Education(TLE)</td>
                <td id="subjects" > '.$row['tle1'].'</td>
               <td id="subjects" > '.$row['tle2'].'</td>
               <td id="subjects" > '.$row['tle3'].'</td>
               <td id="subjects" > '.$row['tle4'].'</td>
                 <td >'; 
                    $tle_remark=0;  
                    if($row['tle4']!=''){ 
                       
                        $tle_remark =(($row['tle1']+$row['tle2']+$row['tle3']+$row['tle4'])/4); 
                 $output.= $tle_remark.'</td>';
                        }
                    
                    if($tle_remark!=0){
                         if($tle_remark>75){
                                $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($tle_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                    
                               else{
                             $output.='</td>';
                             }
      
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">MAPEH</td>
                <td id="subjects" > '.$row['mapeh1'].'</td>
                <td id="subjects" > '.$row['mapeh2'].'</td>
                <td id="subjects" > '.$row['mapeh3'].'</td>
                <td id="subjects" > '.$row['mapeh4'].'</td>
                 <td >'; 
                   $mapeh_remark=0;  
                    if($row['mapeh4']!=''){ 
                       
                        $mapeh_remark =(($row['mapeh1']+$row['mapeh2']+$row['mapeh3']+$row['mapeh4'])/4); 
                 $output.= $mapeh_remark.'</td>';
                        }
                     
                    if($mapeh_remark!=0){
                         if($mapeh_remark>75){
                              $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($mapeh_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                    
                          else{
                             $output.='</td>';
                             }
           
                
            $output.= '</td>
            </tr>
            <tr >   
                <td colspan="2">Music</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['music1'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['music2'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['music3'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['music4'].'</td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Arts</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['art1'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['art2'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['art3'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['art4'].'</td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">PE</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['pe1'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['pe2'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['pe3'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['pe4'].'</td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Health</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['health1'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['health2'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['health3'].'</td>
                <td id="subjects" > &nbsp;&nbsp; '.$row['health4'].'</td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Edukasyon sa Pagpapakatao(EsP)</td>
                <td id="subjects" > '.$row['esp1'].'</td>
                <td id="subjects" > '.$row['esp2'].'</td>
                <td id="subjects" > '.$row['esp3'].'</td>
                <td id="subjects" > '.$row['esp4'].'</td>
                 <td >'; 
                  $esp_remark=0;  
                    if($row['esp4']!=''){ 
                       
                        $esp_remark =(($row['esp1']+$row['esp2']+$row['esp3']+$row['esp4'])/4); 
                 $output.= $esp_remark.'</td>';
                        }
                    
                            
                
                   
                    if($esp_remark!=0){
                         if($esp_remark>75){
                                $output.= ' <td colspan="3"> Passed';
                                 }
                                 else{
                              $output.= ' <td colspan="3"> Failed';
                                 }
                            }
                           if($esp_remark==0){
                              $output.= ' <td colspan="3"> Incomplete';
                             }
                           else{
                             $output.='</td>';
                             }
                  
                
            $output.= '</td>
            </tr>
            <tr>
                 <td colspan="2"></td>
                <td id="subjects" ></td>
                <td id="subjects"></td>
                <td id="subjects"></td>
                <td id="subjects"></td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                 <td colspan="2"></td> 
                <td colspan="4" >General Average</td>
                <td ></td>
                <td colspan="3" style="text-align: left">
               ';

                $ave =0;
                  if($fil_remark!='' && $eng_remark!='' && $math_remark!='' && $science_remark!='' && $ap_remark!='' && $tle_remark!='' && $mapeh_remark!='' && $esp_remark!=''){

             $ave = (($fil_remark+$eng_remark+ $math_remark+$science_remark+$ap_remark+$tle_remark+$mapeh_remark+$esp_remark )/8);
              $output.= $ave;

                }
                else{
                   $output.= 'Incomplete/Failed';
                }
                    
             $output.= '
             </td>
            </tr>
            <tr style=" height:5px; ">
                 <td colspan="10" style="background-color: #ffffb3;"></td> 
            </tr>
            <tr>
                 <td>Remedial Classes</td>
                <td id="subjects" colspan="6" >Conducted from(mm/dd/yyyy):_____________________to(mm/dd/yyyy):___________________</td>
                <td id="subjects" colspan="3"></td>
              
             
            </tr>
            <tr>
                 <td colspan="1" style="text-align:center;">Learning Areas</td> 
                <td colspan="1" style="text-align:center;">Final Rating</td>
                <td colspan="2" style="text-align:center;">Remedial Class Mark</td>
                <td colspan="2" style="text-align:center;">Recomputed Final Grade</td>
                <td colspan="4" style="text-align:center;">Remarks</td>
            </tr>
            <tr style="height: 20px">
                 <td colspan="2"></td>
                <td colspan="2"  id="subjects" ></td>
                <td colspan="2" id="subjects"></td>
                
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr style="height: 20px">
                 <td colspan="2"></td>
                <td colspan="2"  id="subjects" ></td>
                <td colspan="2" id="subjects"></td>
                
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr style="height: 20px;">
                  <td colspan="10" style=" border-style: none"></td>
            </tr>';
                endwhile;
                

                                  $query = "SELECT * FROM student 
                                    inner join grade_level
                                    on grade_level.stud_no = student.stud_no
                                    inner join 1st_grading
                                    on 1st_grading.no = grade_level.no
                                    where student.stud_no = '".$_POST['id']."'";
                          $res = mysqli_query($conn, $query);

                     
                        if(mysqli_num_rows($res)>0){
                             $row = mysqli_fetch_array($res);
                           

                       
                           $output.=' <tr style="height: 20px;">
                                  <td colspan="10" style="text-align: center; border-style: 1px solid black;border-bottom: none">
                                      CERTIFICATION
                                  </td>
                              </tr>
                            <tr style="height: 20px;">
                                   <td colspan="10" style="text-align: center; border-style: 1px solid black; border-top: none; border-bottom: none">
                                      I certify that this is a true copy of '.$row['lname'].', '.$row['fname'].' '.$row['mname'].' with LRN '.$row['lrn'].' and that he/she is eligible for admission to Grade ___.
                                  </td>
                              </tr>
                             <tr style="height: 20px;">
                                  <td colspan="10" style="text-align: center; border-style: 1px solid black; border-top: none ">
                                     Name of School: '.$row['school'].'  School ID: '.$row['school_id'].' Last School Year Attended:  '.$row['ay'].'.
                                  </td>
                            </tr>
                            <tr>
                                <td colspan="10" style="height: 40px;text-align: center;  border-top: none; border-bottom: none">
                            </tr>
                            <tr style="height: 20px;">
                                  <td colspan="2" style="text-align: center;  border-top: none;border-right: none;">
                                    __________________<br>
                                     Date
                                  </td>
                                  <td colspan="6" style="text-align: center; border-right: none;border-left: none; border-top: none ">
                                     ____________________________________________________________<br>
                                     Name of Principal / School Head - Signature over Printed Name
                                  </td>
                                   <td colspan="2" style="text-align: center;  border-left: none;  border-top: none ">
                                    
                                  </td>
                            </tr>
                            </tbody>
              
                            </table>
                              
                               ';

                             
                        }

                            
           
            }
           
           echo $output;
       
        }

       

       
        
      

 
    

               
     
    

 }

