 
<?php
  

    if(isset($_SESSION['add-status']) && $_SESSION['add-status'] == '200'){
        ?>
   
        <div class="alert  w-50 position-absolute m-auto text-center" style="z-index: 20;top: 100px; left:25%; background-color: lightgreen;"><span class="fas fa-check-circle"></span> Added Successfully!</div>
        <script type="text/javascript">
            $('.alert').hide();
            $('.alert').show(1000);
            setTimeout(function(){
                $('.alert').hide(1000);
           },4000)
        </script>

<?php
 }
 unset($_SESSION['add-status']);

    include 'checkID.php';
?>


 <div class="col-md-12 order-md-2 m-auto">
 	 						 <div class="text-right p-2 border-bottom">
                                <a  class="btn btn-sm btn-primary btn-flat bg-gradient" href="./home.php?page=edit&id=<?php echo base64_encode($id)?>"><i class="fa fa-angle-left"></i> BACK</a>
     						</div>
                                <div class="text-center p-2">
                               			<h5 class="text-primary font-weight-bold ">Add New Student Record</h5>
                                </div>


                            <form class="" action="../user/server_add_record.php" method="POST">
                                
                             <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-4 order-md-1 mb-2">
                                              <input type="hidden" name="stud_no" value="<?php echo $id ?>" class="form-control" required>
                                            <label style="font-weight:bold">School</label>
                                             <input type="text" value="<?php echo isset($_SESSION['school'])? $_SESSION['school']: '' ?>" name="school" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>


                                          <div class="col-md-2 order-md-2  mb-2">
                                            <label style="font-weight:bold">School ID</label>
                                           <input type="text" value="<?php echo isset($_SESSION['school_id'])? $_SESSION['school_id']: '' ?>" name="school_id" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-2 order-md-3  mb-2">
                                            <label style="font-weight:bold">District</label>
                                             <input type="text" value="<?php echo isset($_SESSION['district'])? $_SESSION['district']: '' ?>" name="district"  class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-2 order-md-4  mb-2">
                                            <label style="font-weight:bold">Division</label>
                                             <input type="text" value="<?php echo isset($_SESSION['division'])? $_SESSION['division']: '' ?>" name="division" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                           <div class="col-md-2 order-md-5  mb-2">
                                            <label style="font-weight:bold">Region</label>
                                             <input type="text" value="<?php echo isset($_SESSION['region'])? $_SESSION['region']: '' ?>" name="region" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div> 
                                       <div class="row bg-light "  id="school_detail">  

                                          <div class="col-md-3 order-md-1 mb-2">
                                            <label style="font-weight:bold">School Year</label>
                                            <select class="form-select  m-auto" name="ay"  id="ay"  required >
                                             <option  value=""></option>     
                                                 <option value="2022-2023">2022-2023</option>
                                                  <option value="2023-2024">2023-2024</option>
                                                   <option value="2024-2025">2024-2025</option>    
                                                    <option value="2025-2026">2025-2026</option>                      
                                                     <option value="2026-2027">2026-2027</option>    
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-2  mb-2">
                                            <label style="font-weight:bold">Grade</label>
                                           <select class="form-select  m-auto" name="grade"  id="grade"  required>
                                             <option  value=""></option>     
                                                 <option value="GRADE 7">GRADE 7</option>
                                                   <option value="GRADE 8">GRADE 8</option>
                                                    <option value="GRADE 9">GRADE 9</option>
                                                     <option value="GRADE 10">GRADE 10</option>               
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>

                                          <div class="col-md-3 order-md-3  mb-2">
                                            <label style="font-weight:bold">Section</label>
                                           <input type="text" name="section" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-3 order-md-4  mb-2">
                                            <label style="font-weight:bold">Adviser</label>
                                             <input type="text" name="adviser" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div>

                                     <hr>
        <div class="bg-light p-2">
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
                                                        <td>  <input type="number"  name="eng" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" name="eng_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number"  name="eng_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number"  name="eng_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MATH</td>
                                                        <td>  <input type="number"  name="math" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number"  name="math_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number"  name="math_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" name="math_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>SCIENCE</td>
                                                        <td>  <input type="number"  name="science" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number"  name="science_sec" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number"  name="science_rd" class="form-control" placeholder="" ></td>
                                                        <td> <input type="number" name="science_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>FILIPINO</td>
                                                        <td> <input type="number"  name="filipino" class="form-control" placeholder="" ></td>
                                                        <td><input type="number" name="filipino_sec" class="form-control" placeholder="" ></td>
                                                        <td><input type="number"  name="filipino_rd" class="form-control" placeholder="" ></td>
                                                        <td><input type="number"  name="filipino_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>TLE</td>
                                                        <td>  <input type="number"  name="tle" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number"  name="tle_sec" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number"  name="tle_rd" class="form-control" placeholder="" ></td>
                                                       <td>  <input type="number"  name="tle_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MAPEH</td>
                                                        <td>  <input type="number"  name="mapeh" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number"  name="mapeh_sec" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number"  name="mapeh_rd" class="form-control" placeholder="" ></td>
                                                        <td>  <input type="number"  name="mapeh_th" class="form-control" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MUSIC</td>
                                                        <td>  <input type="number"  name="music" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="music_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="music_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="music_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARTS</td>
                                                        <td>  <input type="number"  name="arts" class="form-control music" placeholder="" ></td>
                                                         <td>  <input type="number"  name="arts_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="arts_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="arts_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>PE</td>
                                                        <td>  <input type="number"  name="pe" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="pe_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="pe_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="pe_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>HEALTH</td>
                                                        <td>  <input type="number"  name="health" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="health_sec" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="health_rd" class="form-control music" placeholder="" ></td>
                                                        <td>  <input type="number"  name="health_th" class="form-control music" placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARAL. PAN.</td>
                                                        <td>  <input type="number"  name="ap" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="ap_sec" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="ap_rd" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="ap_th" class="form-control " placeholder="" ></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ESP</td>
                                                        <td>  <input type="number"  name="esp" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="esp_sec" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="esp_rd" class="form-control " placeholder="" ></td>
                                                       <td>  <input type="number"  name="esp_th" class="form-control " placeholder="" ></td>
                                                    </tr>

                                              

       		  </tbody>
     		</table>
        </div>
     		  <div class="text-right p-2"> 
                                    <button type="submit"  class="btn btn-sm btn-primary btn-flat" name="submit-add-rec"><span class="fas fa-plus"></span> ADD RECORD</button>
     		</div>
        </form>
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

