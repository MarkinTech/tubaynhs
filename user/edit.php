    
   
    <div class="row">
            <div class="col-md-12 order-md-1 " style="overflow-y: auto;">

                            <div >
                              
                                <h5 class="modal-title" id="staticBackdropLabel">Student's Record</h5>
                               
                            </div>
                            <div >
                              <i class="alrt pt-0 pb-0"></i>
                            

                                <div class="p-2 ">

                                  <?php
                                        include 'checkID.php';

                                     ?>       
                               </div> 
                                <div class="row mt-1 text-dark">
                                     
                                  
                                   <div class=" col-md-6 order-md-1 p-1">

                                    <div class="d-flex ">
                                    <div class="btn-group d-none">
                                    <button class="btn btn-primary  text-light btn-flat " id="select-grade" type="button" >
                                     Select Grade
                                    </button>
                                    <button class="btn  dropdown-toggle btn-primary text-light btn-flat border-0 " id="select-grade" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                    </button>
                                   
                                    <ul class="dropdown-menu mr-5 w-25" aria-labelledby="dropdownMenuButton1">
                                        <li><button type="button" id="btn1"  class="btn btn-sm dropdown-item">GRADE 7</button></li>
                                        <li><button type="button" id="btn2"  class="btn btn-sm dropdown-item">GRADE 8</button></li>
                                        <li><button type="button" id="btn3"  class="btn btn-sm dropdown-item">GRADE 9</button></li>
                                        <li><button type="button" id="btn4"  class="btn btn-sm dropdown-item">GRADE 10</button></li>
                                    </ul>
                                   
                                  </div>
                                   <button type="button" id="print" class="btn ml-1 btn-success btn-flat bg-gradient" title="Print"><i class="fas fa-print"></i> Print</button>

                                    <form action="../user/download.php" class="p-0"   method="POST" >
                                      <input  type="hidden" name="id" value="<?php echo $id ?>"> 
                                
                                
                                         <button title="Download" type="submit" class="btn ml-1 btn-flat btn-success text-white bg-gradient ">
                                    <i class="fa fa-download"></i> Download</button>
                                    </form>
                                </div>
                                </div>
                                 <div class=" col-md-6 order-md-2 p-2 ">
                                    <script type="text/javascript">
                                        $(document).on('keypress','#records',function(){
                                                $('.arrow-icon').removeClass('d-none');

                                        })

                                    </script>

                                    <style type="text/css">
                                        .bounce {
                                            position: absolute;
                                             right:0px;
                                            width: 10px;
                                            height: 100px;   
                                            animation: bounce 1s;
                                            animation-direction: alternate;
                                            animation-timing-function: cubic-bezier(.5, 0, 1, .5);

                                            animation-iteration-count: infinite;
                                        }
                                          
                                        @keyframes bounce {
                                            from {
                                                transform: translate3d(0, -50px, 0);
                                            }
                                            to {
                                                transform: translate3d(0, -20px, 0);
                                            }
                                        }
                                    </style>

                                    <div class="arrow-icon bounce d-none">
                                    <i class='fas fa-hand-point-left position-absolute' style=' right:150px;font-size:36px; transform: rotate(290deg);'></i>
                                    </div>

                                    <div class=" d-flex justify-content-end">
                                      <a  class="btn  btn-primary btn-flat bg-gradient ml-1" href="./home.php?page=add_student_record&id=<?php echo base64_encode($id)?>"><span class="fas fa-plus"></span> ADD NEW RECORD</a>

                                        <a href="./home.php?page=view" id="download" class="btn ml-1 btn-info bg-gradient btn-flat" title="Download"><i class="fa fa-angle-left"></i> Back</a>
                                        </div>
                                   </div>  
                                        
                                 </div>

                                                
                              
                               

                                  
                               <?php

                                    unset($_SESSION['school']); 
                                    unset($_SESSION['school_id']); 
                                    unset($_SESSION['district']); 
                                    unset($_SESSION['division']); 
                                    unset($_SESSION['region']); 


                                 if(isset($_SESSION['grade']) && $_SESSION['grade']!= 'ALL'){       
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
                                            where student.stud_no = '".$id."' and grade_level.grade='".$_SESSION['grade']."' and grade_level.ay='".$_SESSION['ay']."'";
                                  $res = mysqli_query($conn, $query);
                                }
                                 else if(isset($_SESSION['grade']) && $_SESSION['grade']== 'ALL'){       
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
                                            where student.stud_no = '".$id."' ";
                                  $res = mysqli_query($conn, $query);
                                }
                                else{
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
                                            where student.stud_no = '".$id."' ";
                                  $res = mysqli_query($conn, $query);
                                }
            
                             
                                if(mysqli_num_rows($res)>0){
                                  while($row = mysqli_fetch_array($res)):
                                    $_SESSION['school'] = $row['school'];
                                    $_SESSION['school_id'] = $row['school_id'];
                                    $_SESSION['district'] = $row['district'];
                                    $_SESSION['division'] = $row['division'];
                                    $_SESSION['region'] = $row['region'];
                                   

                               ?> 
                                  
                               <hr/>
                               <div class="text-right"><a href="./home.php?page=edit_student_record&d=<?php echo base64_encode($row['no'])?>" class="btn btn-danger btn-flat text-light bg-gradient"><span class="fas fa-edit"></span> EDIT</a></div>

                             <div class="text-center text-light bg-success bg-gradient"><h4><?php echo $row['grade'] ?></h4></div>
                                   
                                      
                                      

                                 <div id="records" class="p-5 border border-dark"> 

                                   <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-3 order-md-1 mb-2">
                                              <input type="hidden" name="stud_no" value="<?php echo $row['stud_no'] ?>" class="form-control" required>
                                            <label style="font-weight:bold">School</label>
                                             <input type="text" name="school" value="<?php echo $row['school'] ?>" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>


                                          <div class="col-md-2 order-md-2  mb-2">
                                            <label style="font-weight:bold">School ID</label>
                                           <input type="text" name="school_id" value="<?php echo $row['school_id'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-2 order-md-3  mb-2">
                                            <label style="font-weight:bold">District</label>
                                             <input type="text" name="district" value="<?php echo $row['district'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-4  mb-2">
                                            <label style="font-weight:bold">Division</label>
                                             <input type="text" name="division" value="<?php echo $row['division'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                           <div class="col-md-2 order-md-5  mb-2">
                                            <label style="font-weight:bold">Region</label>
                                             <input type="text" name="region" value="<?php echo $row['region'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div> 
                                       <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-3 order-md-1 mb-2">
                                            <label style="font-weight:bold">School Year</label>
                                            <select class="form-select  m-auto"   name="ay"  id="ay"  required>
                                             <option  value="<?php echo $row['ay'] ?>"><?php echo $row['ay'] ?></option>      
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-2  mb-2">
                                            <label style="font-weight:bold">Grade</label>
                                           <input type="text" name="grade" value="<?php echo $row['grade'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                          <div class="col-md-3 order-md-3  mb-2">
                                            <label style="font-weight:bold">Section</label>
                                           <input type="text" name="section" value="<?php echo $row['section'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-4  mb-2">
                                            <label style="font-weight:bold">Adviser</label>
                                             <input type="text" name="adviser" value="<?php echo $row['adviser'] ?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div>


                                     <hr>

                                    <div class="row bg-light p-2" >


                                            <table class="stripe row-border order-column table-hover" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> LEARNING AREAS</th>
                                                        <th class="text-center">Q1</th>
                                                        <th class="text-center">Q2</th>
                                                        <th class="text-center">Q3</th>
                                                        <th class="text-center">Q4</th>
                                                     </tr>
                                                </thead>
                                                <tbody>

                                     



                                                    <tr>
                                                        <td>ENGLISH</td>
                                                        <td>  <input type="number" value="<?php echo $row['eng1'] ?>"  name="eng" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" value="<?php echo $row['eng2'] ?>" name="eng_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['eng3'] ?>" name="eng_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['eng4'] ?>" name="eng_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MATH</td>
                                                        <td>  <input type="number" value="<?php echo $row['math1'] ?>" name="math" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" value="<?php echo $row['math2'] ?>" name="math_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['math3'] ?>" name="math_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['math4'] ?>" name="math_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>SCIENCE</td>
                                                        <td>  <input type="number" value="<?php echo $row['science1'] ?>" name="science" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" value="<?php echo $row['science2'] ?>" name="science_sec" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" value="<?php echo $row['science3'] ?>" name="science_rd" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" value="<?php echo $row['science4'] ?>" name="science_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>FILIPINO</td>
                                                        <td> <input type="number" value="<?php echo $row['filipino1'] ?>" name="filipino" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['filipino2'] ?>" name="filipino_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['filipino3'] ?>" name="filipino_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" value="<?php echo $row['filipino4'] ?>" name="filipino_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>TLE</td>
                                                        <td>  <input type="number" value="<?php echo $row['tle1'] ?>" name="tle" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['tle2'] ?>" name="tle_sec" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['tle3'] ?>" name="tle_rd" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['tle4'] ?>" name="tle_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MAPEH</td>
                                                        <td>  <input type="number" value="<?php echo $row['mapeh1'] ?>" name="mapeh" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['mapeh2'] ?>" name="mapeh_sec" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['mapeh3'] ?>" name="mapeh_rd" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['mapeh4'] ?>" name="mapeh_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MUSIC</td>
                                                        <td>  <input type="number" value="<?php echo $row['music1'] ?>" name="music" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['music2'] ?>" name="music_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['music3'] ?>" name="music_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['music4'] ?>" name="music_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARTS</td>
                                                        <td>  <input type="number" value="<?php echo $row['art1'] ?>" name="arts" class="form-control music" placeholder="" ></td>
                                                         <td>  <input type="number" value="<?php echo $row['art2'] ?>" name="arts_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['art3'] ?>" name="arts_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['art4'] ?>" name="arts_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>PE</td>
                                                        <td>  <input type="number" value="<?php echo $row['pe1'] ?>" name="pe" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['pe2'] ?>" name="pe_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['pe3'] ?>" name="pe_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['pe4'] ?>" name="pe_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>HEALTH</td>
                                                        <td>  <input type="number" value="<?php echo $row['health1'] ?>" name="health" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['health2'] ?>" name="health_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['health3'] ?>" name="health_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number" value="<?php echo $row['health4'] ?>" name="health_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARALING PANLIPUNAN</td>
                                                        <td>  <input type="number" value="<?php echo $row['ap1'] ?>" name="ap" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['ap2'] ?>" name="ap_sec" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['ap3'] ?>" name="ap_rd" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['ap4'] ?>" name="ap_th" class="form-control " placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ESP</td>
                                                        <td>  <input type="number" value="<?php echo $row['esp1'] ?>" name="esp" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['esp2'] ?>" name="esp_sec" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['esp3'] ?>" name="esp_rd" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number" value="<?php echo $row['esp4'] ?>" name="esp_th" class="form-control " placeholder="" ></td>
                                                    </tr>
                                                      </tbody>

                                                </table>
                                               </div>
                                             </div>

                                                <?php endwhile; 

                                                }
                                                else{
                                                    ?>


                                                    <div class="text-center text-light bg-success bg-gradient"><h4>GRADE 7</h4></div>
                                   
                                      
                                      

                                 <div id="records" class="p-2 bg-light"> 

                                   <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-4 order-md-1 mb-2">
                                              <input type="hidden" name="stud_no" class="form-control" required>
                                            <label style="font-weight:bold">School</label>
                                             <input type="text" name="school"class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>


                                          <div class="col-md-2 order-md-2  mb-2">
                                            <label style="font-weight:bold">School ID</label>
                                           <input type="text" name="school_id"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-2 order-md-3  mb-2">
                                            <label style="font-weight:bold">District</label>
                                             <input type="text" name="district"   class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-2 order-md-4  mb-2">
                                            <label style="font-weight:bold">Division</label>
                                             <input type="text" name="division"   class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                           <div class="col-md-2 order-md-5  mb-2">
                                            <label style="font-weight:bold">Region</label>
                                             <input type="text" name="region"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div> 
                                       <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-3 order-md-1 mb-2">
                                            <label style="font-weight:bold">School Year</label>
                                            <select class="form-select  m-auto"  name="ay"  id="ay"  required>
                                             <option  value=""></option>  
                                             <option disabled=""></option>       
                                               
                                             
                                                  
                                                 <option value="2022-2023">2022-2023</option>
                                                  <option value="2023-2024">2023-2024</option>                  
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-2  mb-2">
                                            <label style="font-weight:bold">Grade</label>
                                           <input type="text" name="grade"   class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                          <div class="col-md-3 order-md-3  mb-2">
                                            <label style="font-weight:bold">Section</label>
                                           <input type="text" name="section"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-4  mb-2">
                                            <label style="font-weight:bold">Adviser</label>
                                             <input type="text" name="adviser"   class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div>


                                     <hr>

                                    <div class="row" >

                                                    <h3>No results found.</h3>
                                            
                                               </div>
                                             </div>     



                                                    <?php

                                                }
                                                


                                                ?>
                                              
             

                                 


                                  
                        
                          
                            </div>

                              <?php
                                  include 'print.php';
                             ?>
                                                                            
     </div>   
 </div>

<script type="text/javascript">
    $("input").prop('readonly', true);
     $("select").prop('readonly', true);
</script>

<style type="text/css">
        #records input:read-only {
                background-color: white;
        }


       
                

</style>