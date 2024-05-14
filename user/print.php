<div id="outprint" class="d-none">



	   <?php
	      $query = "SELECT * FROM student 
	                inner join grade_level
	                on grade_level.stud_no = student.stud_no
	                inner join 1st_grading
	                on 1st_grading.no = grade_level.no
	                where student.stud_no = '".$id."'";
	      $res = mysqli_query($conn, $query);

	 
	    if(mysqli_num_rows($res)>0){
	         $row = mysqli_fetch_array($res);
	       

	   ?> 
                                  


    <table class="table table-hover table-striped mt-4 m-auto" id="print-table" style="width:1000px" >
        <thead">
             <tr> <td colspan="10" style="text-align:left;border-bottom: none;" >
                    <small> SF 10-JHS </small><br>
                   
                          
                </td>
               </tr>

               <tr>
                <td colspan="10" style="text-align:center; border-bottom: none;border-top: none;" >
                    <img src="../img/depedlogo1.png" width="45" style="position: absolute; left:15px">
                    <img src="../img/depedlogo2.png" width="75" style="position: absolute; right:75px">
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
                <td colspan="10" id="header1"  style=" color: black;  text-align: center; 
        background-color: #e6ffb3  ">LEARNER'S INFORMATION</td>
            </tr>
            <tr>   
                <td colspan="2">LAST NAME: <?php echo $row['lname']?></td>
                <td colspan="3">FIRST NAME:  <?php echo $row['fname']?> </td>
                <td colspan="2">NAME EXTN(Jr.,Sr.):  <?php echo $row['ext']?> </td>
                <td colspan="3">MIDDLE NAME:  <?php echo $row['mname']?></td>
               
            </tr>
            <tr>   
                <td colspan="3">Learner's Reference Number(LRN):  <?php echo $row['lrn']?></td>
                <td colspan="3">Birthdate(yyyy/mm/dd):   <?php echo $row['dob']?> </td>
                <td colspan="3">Sex :  <?php echo $row['gender']?></td>
                <td colspan="1"></td>
               
            </tr>
            <tr >
          <td colspan="10" id="header1"  style=" color: black;  text-align: center; 
        background-color: #e6ffb3;   ">ELIGIBILITY FOR JHS ENROLLMENT</td>
            </tr>
            <tr >   
                <td colspan="4" ><input type="checkbox"> Type of Completion: Elementary School Completer</td>
                <td colspan="2">General Average:  <?php echo $row['gen_avg']?></td>
                <td colspan="4">Citation(if any): </td>
                
            </tr>
            <tr >   
                <td colspan="4">Name of Elementary School:  <?php echo $row['elem_school']?></td>
                <td colspan="2">School ID:  <?php echo $row['elem_school_id']?></td>
                <td colspan="4">Address of School:  <?php echo $row['elem_address']?> </td>
              
            </tr>
            <tr>   
                <td colspan="10" style="border-top: 1px solid black">Other Credential Presented</td>  
            </tr>
            <tr >   
                <td colspan="3"><input type="checkbox">PEPT Passer Rating: ________</td>
                <td colspan="3"><input type="checkbox">ALS A&E Passer Rating: ________</td>
                <td colspan="4"><input type="checkbox">Others(Pls. Specify): ________</td>
              
            </tr>
            <tr >   
                <td colspan="5" style="text-align:center" ><input type="checkbox">Date of Examination/Assessment(mm/dd/yyyy): _____________</td>
                <td  colspan="5" style="text-align:center"><input type="checkbox">Name and Address of Testing Center: _______________________________</td>
              
              
            </tr>

       </thead>
       <tbody> 
          <tr >   
              <td colspan="10" id="header1" style=" color: black;  text-align: center; 
        background-color: #e6ffb3;   ">SCHOLASTIC RECORD</td>
            </tr>
       
       <?php
        }

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
                    where student.stud_no = '".$id."'";
          $res = mysqli_query($conn, $query);

     
        if(mysqli_num_rows($res)>0){
             while($row = mysqli_fetch_array($res)):
           

       ?> 
              


              
            <tr>   
                <td colspan="4">School: <?php echo $row['school']?> &nbsp;&nbsp;&nbsp; School ID: <?php echo $row['school_id']?>  </td>
                <td colspan="2">District: <?php echo $row['district']?>  </td>
                <td colspan="2">Division:  <?php echo $row['division']?> </td>
                <td colspan="2">Region: <?php echo $row['region']?> </td>
            </tr>
            <tr>   
                <td colspan="5">Classified as Grade: <?php echo $row['grade']?>  &nbsp;&nbsp; Section: <?php echo $row['section']?> &nbsp;&nbsp; School Year: <?php echo $row['ay']?>  &nbsp;&nbsp; </td>
                <td  colspan="4">Name of Adviser/Teacher: <?php echo $row['adviser']?></td>
                <td  colspan="1">Signature:</td>
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
                <td id="subjects" ><?php echo $row['filipino1']?></td>
                <td id="subjects"><?php echo $row['filipino2']?></td>
                <td id="subjects"><?php echo $row['filipino3']?></td>
                <td id="subjects"><?php echo $row['filipino4']?></td>
                <td ><?php 
                    $fil_remark='';  
                    if($row['filipino4']!=''){ 
                       
                        $fil_remark =(($row['filipino1']+$row['filipino2']+$row['filipino3']+$row['filipino4'])/4); 
                        echo $fil_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($fil_remark!=''){
                         if($fil_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">English</td>
                <td id="subjects" ><?php echo $row['eng1']?></td>
               <td id="subjects" ><?php echo $row['eng2']?></td>
               <td id="subjects" ><?php echo $row['eng3']?></td>
               <td id="subjects" ><?php echo $row['eng4']?></td>
                 <td ><?php 
                    $eng_remark='';  
                    if($row['eng4']!=''){ 
                       
                        $eng_remark =(($row['eng1']+$row['eng2']+$row['eng3']+$row['eng4'])/4); 
                        echo $eng_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($eng_remark!=''){
                         if($eng_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">Mathematics</td>
                <td id="subjects" ><?php echo $row['math1']?></td>
                <td id="subjects" ><?php echo $row['math2']?></td>
                <td id="subjects" ><?php echo $row['math3']?></td>
                <td id="subjects" ><?php echo $row['math4']?></td>
                <td ><?php 
                    $math_remark='';  
                    if($row['math4']!=''){ 
                       
                        $math_remark =(($row['math1']+$row['math2']+$row['math3']+$row['math4'])/4); 
                        echo $math_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($math_remark!=''){
                         if($math_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">Science</td>
                <td id="subjects" ><?php echo $row['science1']?></td>
                <td id="subjects" ><?php echo $row['science2']?></td>
                <td id="subjects" ><?php echo $row['science3']?></td>
                <td id="subjects" ><?php echo $row['science4']?></td>
                 <td ><?php 
                    $science_remark='';  
                    if($row['science4']!=''){ 
                       
                        $science_remark =(($row['science1']+$row['science2']+$row['science3']+$row['science4'])/4); 
                        echo $science_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($science_remark!=''){
                         if($science_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">Araling Panlipunan(AP)</td>
                <td id="subjects" ><?php echo $row['ap1']?></td>
                <td id="subjects" ><?php echo $row['ap2']?></td>
                <td id="subjects" ><?php echo $row['ap3']?></td>
                <td id="subjects" ><?php echo $row['ap4']?></td>
                <td ><?php 
                    $ap_remark='';  
                    if($row['ap4']!=''){ 
                       
                        $ap_remark =(($row['ap1']+$row['ap2']+$row['ap3']+$row['ap4'])/4); 
                        echo $ap_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($ap_remark!=''){
                         if($ap_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">Technology and Livelihood Education(TLE)</td>
                <td id="subjects" ><?php echo $row['tle1']?></td>
                <td id="subjects" ><?php echo $row['tle2']?></td>
                <td id="subjects" ><?php echo $row['tle3']?></td>
                <td id="subjects" ><?php echo $row['tle4']?></td>
                 <td ><?php 
                    $tle_remark='';  
                    if($row['tle4']!=''){ 
                       
                        $tle_remark =(($row['tle1']+$row['tle2']+$row['tle3']+$row['tle4'])/4); 
                        echo $tle_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($tle_remark!=''){
                         if($tle_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">MAPEH</td>
                <td id="subjects" ><?php echo $row['mapeh1']?></td>
                <td id="subjects" ><?php echo $row['mapeh2']?></td>
                <td id="subjects" ><?php echo $row['mapeh3']?></td>
                <td id="subjects" ><?php echo $row['mapeh4']?></td>
                 <td ><?php 
                    $mapeh_remark='';  
                    if($row['mapeh4']!=''){ 
                       
                        $mapeh_remark =(($row['mapeh1']+$row['mapeh2']+$row['mapeh3']+$row['mapeh4'])/4); 
                        echo $mapeh_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($mapeh_remark!=''){
                         if($mapeh_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
            <tr >   
                <td colspan="2">Music</td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['music1']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['music2']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['music3']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['music4']?></td>
               <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Arts</td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['art1']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['art2']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['art3']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['art4']?></td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">PE</td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['pe1']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['pe2']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['pe3']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['pe4']?></td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Health</td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['health1']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['health2']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['health3']?></td>
                <td id="subjects" > &nbsp;&nbsp;<?php echo $row['health4']?></td>
                <td ></td>
                <td colspan="3"></td>
            </tr>
            <tr >   
                <td colspan="2">Edukasyon sa Pagpapakatao(EsP)</td>
                <td id="subjects" ><?php echo $row['esp1']?></td>
                <td id="subjects" ><?php echo $row['esp2']?></td>
                <td id="subjects" ><?php echo $row['esp3']?></td>
                <td id="subjects" ><?php echo $row['esp4']?></td>
                 <td ><?php 
                    $esp_remark='';  
                    if($row['esp4']!=''){ 
                       
                        $esp_remark =(($row['esp1']+$row['esp2']+$row['esp3']+$row['esp4'])/4); 
                        echo $esp_remark;
                        }
                     ?>
                            
                </td>
                <td colspan="3">
                    <?php 
                    if($esp_remark!=''){
                         if($esp_remark>75){
                        echo 'Passed';
                         }
                         else{
                          echo 'Failed';
                         }
                    }
                    else{
                        echo '';
                     }

            ?></td>
            </tr>
           
            <tr>
                 <td colspan="2"></td> 
                <td colspan="4" >General Average</td>
                <td ></td>
                <td colspan="3"> 
                    <?php if($fil_remark!='' && $eng_remark!='' && $math_remark!='' && $science_remark!='' && $ap_remark!='' && $tle_remark!='' && $mapeh_remark!='' && $esp_remark!=''){

                                echo (($fil_remark+$eng_remark+ $math_remark+$science_remark+$ap_remark+$tle_remark+$mapeh_remark+$esp_remark )/8);
                            }
                            else{
                                echo 'Incomplete/Failed';
                            }
                        ?>
                </td>

            </tr>
            <tr style=" height:5px; ">
                 <td colspan="10"  style=" color: black;  text-align: center; 
        background-color: #e6ffb3;   "></td> 
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
            </tr>
            
            <?php
              endwhile;
            }
            ?>

        <?php
          $query = "SELECT * FROM student 
                    inner join grade_level
                    on grade_level.stud_no = student.stud_no
                    inner join 1st_grading
                    on 1st_grading.no = grade_level.no
                    where student.stud_no = '".$id."'";
          $res = mysqli_query($conn, $query);

     
        if(mysqli_num_rows($res)>0){
             $row = mysqli_fetch_array($res);
           

       ?> 
             <tr style="height: 20px;">
                  <td colspan="10" style="text-align: center; border-style: 1px solid black;border-bottom: none">
                      CERTIFICATION
                  </td>
              </tr>
            <tr style="height: 20px;">
                   <td colspan="10" style="text-align: center; border-style: 1px solid black; border-top: none; border-bottom: none">
                      I certify that this is a true copy of <?php echo $row['lname'].', '.$row['fname'].' '.$row['mname'] ?> with LRN <?php echo $row['lrn']; ?> and that he/she is eligible for admission to Grade ___.
                  </td>
              </tr>
             <tr style="height: 20px;">
                  <td colspan="10" style="text-align: center; border-style: 1px solid black; border-top: none ">
                     Name of School: <?php echo $row['school']; ?>  School ID: <?php echo $row['school_id']; ?> Last School Year Attended:  <?php echo $row['ay']; ?>.
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
         <?php
        }
        ?>

       </tbody>
      
    </table>
    
<style class="">
    table{
        border-collapse: collapse;
        color: black;
    }
    table td{
        width: 100px;
        font-size: 12px;
        border:2px solid black;
        padding: 2px;
    }
   
   
</style>




</div>


<script>
    $(function(){
        $('#print').click(function(){
            var p = $('#outprint').clone()
            var nw = window.open("","","width=1200,height=900,left=150")
                nw.document.write(p.html())
                nw.document.close()
                setTimeout(()=>{
                    nw.print()
                    setTimeout(()=>{
                      nw.close()
                     },150)
                   
                },200)
        })
    })
</script>