 
<?php
  

    if(isset($_SESSION['update-status']) && $_SESSION['update-status'] == '200'){
        ?>
   
        <div class="alert  w-50 position-absolute m-auto text-center" style="z-index: 20;top: 100px; left:25%; background-color: lightgreen;"><span class="fas fa-check-circle"></span> Edit Successful!</div>
        <script type="text/javascript">
            $('.alert').hide();
            $('.alert').show(1000);
           setTimeout(function(){
                $('.alert').hide(1000);
           },4000)
        </script>

<?php
 }
 unset($_SESSION['update-status']);

    include 'checkID.php';
?>


 <div class="col-md-12 order-md-2 m-auto">
 	 						 <div class="text-right p-2">
                                <a  class="btn btn-sm btn-primary btn-flat bg-gradient" href="./home.php?page=edit&id=<?php echo base64_encode($id)?>"><i class="fa fa-angle-left"></i> BACK</a>
     						</div>
                                <div class="text-center p-2">
                               			<h5 class="text-primary font-weight-bold ">Update Student Record </h5>
                                </div>




                               <?php
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
                                            where grade_level.no = '".$id2."'";
                                  $res = mysqli_query($conn, $query);
            
                             
                                if(mysqli_num_rows($res)>0){
                                  $row = mysqli_fetch_array($res);
                                   

                               ?> 



                            <form class="p-2" action="../user/server_edit_record.php" method="POST">
                                
                             <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-4 order-md-1 mb-2">
                                            <div class="form-group"> 
                                               <input type="hidden" name="no" value="<?php echo $id2 ?>" class="form-control" required>
                                            <label style="font-weight:bold">School</label>
                                             <input type="text" value="<?php echo $row['school']?>" name="school" class="form-control" required>
                                            <span class="text-danger"></span>
                                        </div>
                                         </div>


                                          <div class="col-md-2 order-md-2  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">School ID</label>
                                           <input type="text" value="<?php echo $row['school_id']?>" name="school_id" class="form-control" required>
                                            <span class="text-danger"></span>
                                        </div>
                                         </div>
                                          <div class="col-md-2 order-md-3  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">District</label>
                                             <input type="text" value="<?php echo $row['district']?>" name="district"  class="form-control" required>
                                            <span class="text-danger"></span>
                                            </div>
                                         </div>
                                          <div class="col-md-2 order-md-4  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">Division</label>
                                             <input type="text" value="<?php echo $row['division']?>" name="division" class="form-control" required>
                                            <span class="text-danger"></span>
                                          </div>
                                         </div>
                                           <div class="col-md-2 order-md-5  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">Region</label>
                                             <input type="text" value="<?php echo $row['region']?>" name="region" class="form-control" required>
                                            <span class="text-danger"></span>
                                             </div>
                                         </div>

                                     </div> 
                                       <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-3 order-md-1 mb-2">
                                            <label style="font-weight:bold">School Year</label>
                                            <select class="form-select  m-auto" name="ay"  id="ay"  required>
                                             <option  value="<?php echo $row['ay']?>" selected><?php echo $row['ay']?></option>     
                                                 <option value="2022-2023">2022-2023</option>
                                                  <option value="2023-2024">2023-2024</option>
                                                   <option value="2024-2025">2024-2025</option>    
                                                    <option value="2025-2026">2025-2026</option>                      
                                                     <option value="2026-2027">2026-2027</option>    
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-2 mb-2 ">
                                            <label style="font-weight:bold">Grade</label>
                                           <select class="form-select  m-auto" name="grade"  id="grade"  required>
                                             <option  value="<?php echo $row['grade']?>" selected><?php echo $row['grade']?></option>     
                                                 <option value="GRADE 7">GRADE 7</option>
                                                   <option value="GRADE 8">GRADE 8</option>
                                                    <option value="GRADE 9">GRADE 9</option>
                                                     <option value="GRADE 10">GRADE 10</option>               
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>

                                          <div class="col-md-3 order-md-3  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">Section</label>
                                           <input type="text" name="section" value="<?php echo $row['section']?>" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                         </div>
                                          <div class="col-md-3 order-md-4  mb-2">
                                            <div class="form-group">
                                            <label style="font-weight:bold">Adviser</label>
                                             <input type="text" name="adviser" value="<?php echo $row['adviser']?>"  class="form-control" required>
                                            <span class="text-danger"></span>
                                          </div>
                                         </div>

                                     </div>

                                     <hr>
        <div class="p-2 bg-light m-auto">
          <table class="stripe row-border order-column table-hover bg-light m-auto p-5" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> LEARNING AREAS</th>
                                                        <th class="text-center">Q1</th>
                                                        <th class="text-center">Q2</th>
                                                        <th class="text-center">Q3</th>
                                                        <th class="text-center">Q4</th>
                                                     </tr>
                                                </thead>
                                                <tbody style="font-size:12px">

                                    


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
     		  <div class="text-right p-2"> 
                                    <button type="submit"  class="btn btn-sm btn-danger btn-flat" name="submit-add-rec"><span class="fas fa-plus"></span> SAVE UPDATE</button>
     		</div>
        </form>

       	<?php
       }
       	?>
     </div>
    
    <script type="text/javascript">
        $(document).keypress(
          function(event){
            if (event.which == '13') {
              event.preventDefault();
            }
        });


        $('form').on('focus', 'input[type=number]', function (e) {
          $(this).on('wheel.disableScroll', function (e) {
            e.preventDefault()
          })
        })
        $('form').on('blur', 'input[type=number]', function (e) {
          $(this).off('wheel.disableScroll')
        })


    </script>

