    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl ">
                            <div class="modal-content">
                            <div class="modal-header">
                              
                                <h5 class="modal-title" id="staticBackdropLabel">Student's Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <i class="alrt pt-0 pb-0"></i>
                            

                                 <div class="dropdown mb-2 " >
                                    <div class="btn-group">
                                    <button class="btn btn-primary  text-light btn-flat w-100" id="select-grade" type="button" >
                                     Select Grade
                                    </button>
                                    <button class="btn  dropdown-toggle btn-primary text-light btn-flat border-0 " id="select-grade" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                    </button>
                                   
                                    <ul class="dropdown-menu mr-5 w-25" aria-labelledby="dropdownMenuButton1">
                                        <li><button type="button" id="btn1" class="btn btn-sm dropdown-item">GRADE 7</button></li>
                                        <li><button type="button" id="btn2"  class="btn btn-sm dropdown-item">GRADE 8</button></li>
                                        <li><button type="button" id="btn3"  class="btn btn-sm dropdown-item">GRADE 9</button></li>
                                        <li><button type="button" id="btn4"  class="btn btn-sm dropdown-item">GRADE 10</button></li>
                                    </ul>
                                   
                                  </div>
                                   <button type="button" id="print" class="btn btn-success btn-flat" title="Print"><i class="fas fa-print"></i> Print</button>
                                     <button type="button" id="download" class="btn btn-success btn-flat" title="Download"><i class="fas fa-download"></i> Download</button>
                                     <div class="input-group mt-1  w-50 justify-content-end" style="margin-left: 50%">
                                        
                                     Student Name | <b></b>
                                      </div>
                                </div>  

                            <form action="" method="POST"  class="modal-update-record p-2">
                                  

                                  

                             <div class="text-center text-light bg-success bg-gradient"><h4>GRADE 7</h4></div>
                                   
                                      
                                      

                                 <div id="grade_7" class="p-2"> 
                                  <div class="row bg-secondary "  id="school_detail">  

                                          <div class="col-md-4 order-md-1 mb-2">
                                            <label style="font-weight:bold">YEAR</label>
                                            <select class="form-select  m-auto" name="ay"  id="ay"  required>
                                             <option  value="{{ $student->ay  }}"></option>  
                                             <option disabled=""></option>       
                                               
                                             
                                                  
                                                 <option value="{{$i}}"></option>            
                                             
                                            </select>
                                            <span class="text-danger"></span>
                                         </div>


                                          <div class="col-md-4 order-md-2  mb-2">
                                            <label style="font-weight:bold">SECTION</label>
                                           <input type="text" name="section" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>
                                          <div class="col-md-4 order-md-3  mb-2">
                                            <label style="font-weight:bold">ADVISER</label>
                                             <input type="text" name="adviser" class="form-control" required>
                                            <span class="text-danger"></span>
                                         </div>

                                     </div> <hr>

                                    <div class="row" >


                                            <table class="stripe row-border order-column table-hover" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> LEARNING AREAS</th>
                                                        <th>Q1</th>
                                                        <th>Q2</th>
                                                        <th>Q3</th>
                                                        <th>Q4</th>
                                                     </tr>
                                                </thead>
                                                <tbody>

                                      <?php 
                                      
                                        $sql = "SELECT * FROM grade_level  inner join 1st_grading
                                                on 1st_grading.no = grade_level.no 
                                                where grade_level.stud_no = '1'";
                                        $qry = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($qry)>0){
                                              while($row = mysqli_fetch_array($qry)):
                 
   
                                        ?>



                                                    <tr>
                                                        <td>ENGLISH</td>
                                                        <td>  <input type="number" value="" name="eng" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="" name="eng_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="" name="eng_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="" name="eng_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MATH</td>
                                                        <td>  <input type="number" value="{{ $student->math }}" name="math" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->math_sec }}" name="math_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->math_rd }}" name="math_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->math_th }}" name="math_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>SCIENCE</td>
                                                        <td>  <input type="number" value="{{ $student->science }}" name="science" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_sec }}" name="science_sec" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_rd }}" name="science_rd" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_th }}" name="science_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>FILIPINO</td>
                                                        <td> <input type="number" value="{{ $student->filipino }}" name="filipino" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_sec }}" name="filipino_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_rd }}" name="filipino_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_th}}" name="filipino_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>TLE</td>
                                                        <td>  <input type="number" value="{{ $student->tle }}" name="tle" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_sec}}" name="tle_sec" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_rd }}" name="tle_rd" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_th }}" name="tle_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MAPEH</td>
                                                        <td>  <input type="number" value="{{ $student->mapeh }}" name="mapeh" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_sec }}" name="mapeh_sec" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_rd }}" name="mapeh_rd" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_th }}" name="mapeh_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MUSIC</td>
                                                        <td>  <input type="number" value="{{ $student->music }}" name="music" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_sec }}" name="music_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_rd }}" name="music_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_th }}" name="music_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARTS</td>
                                                        <td>  <input type="number" value="{{ $student->arts }}" name="arts" class="form-control music" placeholder="" required></td>
                                                         <td>  <input type="number" value="{{ $student->arts_sec }}" name="arts_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->arts_rd }}" name="arts_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->arts_th }}" name="arts_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>PE</td>
                                                        <td>  <input type="number" value="{{ $student->pe }}" name="pe" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_sec }}" name="pe_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_rd }}" name="pe_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_th }}" name="pe_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>HEALTH</td>
                                                        <td>  <input type="number" value="{{ $student->health }}" name="health" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_sec }}" name="health_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_rd }}" name="health_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_th }}" name="health_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARALING PANLIPUNAN</td>
                                                        <td>  <input type="number" value="{{ $student->ap }}" name="ap" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_sec }}" name="ap_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_rd }}" name="ap_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_th }}" name="ap_th" class="form-control " placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ESP</td>
                                                        <td>  <input type="number" value="{{ $student->esp }}" name="esp" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_sec }}" name="esp_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_rd }}" name="esp_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_th }}" name="esp_th" class="form-control " placeholder="" required></td>
                                                    </tr>

                                                <?php endwhile; 

                                                }
                                                else{

                                                 ?>


                                                    <tr>
                                                        <td>ENGLISH</td>
                                                        <td>  <input type="number" value="" name="eng" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="" name="eng_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="" name="eng_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="" name="eng_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MATH</td>
                                                        <td>  <input type="number" value="{{ $student->math }}" name="math" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->math_sec }}" name="math_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->math_rd }}" name="math_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->math_th }}" name="math_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>SCIENCE</td>
                                                        <td>  <input type="number" value="{{ $student->science }}" name="science" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_sec }}" name="science_sec" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_rd }}" name="science_rd" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student->science_th }}" name="science_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>FILIPINO</td>
                                                        <td> <input type="number" value="{{ $student->filipino }}" name="filipino" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_sec }}" name="filipino_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_rd }}" name="filipino_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student->filipino_th}}" name="filipino_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>TLE</td>
                                                        <td>  <input type="number" value="{{ $student->tle }}" name="tle" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_sec}}" name="tle_sec" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_rd }}" name="tle_rd" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->tle_th }}" name="tle_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MAPEH</td>
                                                        <td>  <input type="number" value="{{ $student->mapeh }}" name="mapeh" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_sec }}" name="mapeh_sec" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_rd }}" name="mapeh_rd" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->mapeh_th }}" name="mapeh_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MUSIC</td>
                                                        <td>  <input type="number" value="{{ $student->music }}" name="music" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_sec }}" name="music_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_rd }}" name="music_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->music_th }}" name="music_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARTS</td>
                                                        <td>  <input type="number" value="{{ $student->arts }}" name="arts" class="form-control music" placeholder="" required></td>
                                                         <td>  <input type="number" value="{{ $student->arts_sec }}" name="arts_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->arts_rd }}" name="arts_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->arts_th }}" name="arts_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>PE</td>
                                                        <td>  <input type="number" value="{{ $student->pe }}" name="pe" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_sec }}" name="pe_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_rd }}" name="pe_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->pe_th }}" name="pe_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>HEALTH</td>
                                                        <td>  <input type="number" value="{{ $student->health }}" name="health" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_sec }}" name="health_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_rd }}" name="health_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student->health_th }}" name="health_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARALING PANLIPUNAN</td>
                                                        <td>  <input type="number" value="{{ $student->ap }}" name="ap" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_sec }}" name="ap_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_rd }}" name="ap_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->ap_th }}" name="ap_th" class="form-control " placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ESP</td>
                                                        <td>  <input type="number" value="{{ $student->esp }}" name="esp" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_sec }}" name="esp_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_rd }}" name="esp_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student->esp_th }}" name="esp_th" class="form-control " placeholder="" required></td>
                                                    </tr>




                                                <?php 

                                                }

                                                ?>
                                                </tbody>

                                            </table>
             

                                    </div>
                                    </div>


<!--     grade 8  -->

                <div class="text-center text-light bg-success bg-gradient"><h4>GRADE 8</h4></div>
              
                                      

                                       
                             <div id="grade_8" class="p-2"> 
                                  <div class="row bg-secondary "  id="school_detail">  

                                          <div class="col-md-4 order-md-1 mb-2">
                                            <label style="font-weight:bold">YEAR</label>
                                            <select class="form-select  m-auto" name="gr8_ay"  id="gr8_ay"  required>
                                             <option  value="{{ $student_gr8->ay  }}">{{ $student_gr8->ay  }}</option>  
                                             <option disabled="">-----------------------------------</option>       
                                                @php
                                                  $year = date('Y');   
                                                @endphp

                                              @for($i=2018; $i<=$year; $i++)
                                             
                                                  
                                                 <option value="{{$i}}">{{$i}}</option>            
                                              @endfor
                                            </select>
                                            <span class="text-danger">@error('ay') {{$message}} @enderror</span>
                                         </div>
                                          <div class="col-md-4 order-md-2  mb-2">
                                            <label style="font-weight:bold">SECTION</label>
                                           <input type="text" name="section" class="form-control" required>
                                            <span class="text-danger">@error('section') {{$message}} @enderror</span>
                                         </div>
                                          <div class="col-md-4 order-md-3  mb-2">
                                            <label style="font-weight:bold">ADVISER</label>
                                             <input type="text" name="adviser" class="form-control" required>
                                            <span class="text-danger">@error('adviser') {{$message}} @enderror</span>
                                         </div>

                                     </div> <hr>

                                    <div class="row" >
                                      

                                        <input type="hidden" name="gr8_grade" value="Grade 8" class="form-control" required>
                                        <input type="hidden" name="gr8_grading" value="1st Grading" class="form-control" required>
                                         <input type="hidden" name="gr8_grade_sec" value="Grade 8" class="form-control" required>
                                        <input type="hidden" name="gr8_grading_sec" value="2nd Grading" class="form-control" required>
                                         <input type="hidden" name="gr8_grade_rd" value="Grade 8" class="form-control" required>
                                        <input type="hidden" name="gr8_grading_rd" value="3rd Grading" class="form-control" required>
                                         <input type="hidden" name="gr8_grade_th" value="Grade 8" class="form-control" required>
                                        <input type="hidden" name="gr8_grading_th" value="4th Grading" class="form-control" required>

                                         <table class="stripe row-border order-column table-hover" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> LEARNING AREAS</th>
                                                        <th>Q1</th>
                                                        <th>Q2</th>
                                                        <th>Q3</th>
                                                        <th>Q4</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ENGLISH</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->eng }}" name="gr8_eng" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student_gr8->eng_sec }}" name="gr8_eng_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->eng_rd }}" name="gr8_eng_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->eng_th }}" name="gr8_eng_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MATH</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->math }}" name="gr8_math" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student_gr8->math_sec }}" name="gr8_math_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->math_rd }}" name="gr8_math_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->math_th }}" name="gr8_math_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>SCIENCE</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->science }}" name="gr8_science" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student_gr8->science_sec }}" name="gr8_science_sec" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student_gr8->science_rd }}" name="gr8_science_rd" class="form-control" placeholder="" required></td>
                                                        <td> <input type="number" value="{{ $student_gr8->science_th }}" name="gr8_science_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>FILIPINO</td>
                                                        <td> <input type="number" value="{{ $student_gr8->filipino }}" name="gr8_filipino" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->filipino_sec }}" name="gr8_filipino_sec" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->filipino_rd }}" name="gr8_filipino_rd" class="form-control" placeholder="" required></td>
                                                        <td><input type="number" value="{{ $student_gr8->filipino_th}}" name="gr8_filipino_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>TLE</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->tle }}" name="gr8_tle" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->tle_sec}}" name="gr8_tle_sec" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->tle_rd }}" name="gr8_tle_rd" class="form-control" placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->tle_th }}" name="gr8_tle_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MAPEH</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->mapeh }}" name="gr8_mapeh" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->mapeh_sec }}" name="gr8_mapeh_sec" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->mapeh_rd }}" name="gr8_mapeh_rd" class="form-control" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->mapeh_th }}" name="gr8_mapeh_th" class="form-control" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>MUSIC</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->music }}" name="gr8_music" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->music_sec }}" name="gr8_music_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->music_rd }}" name="gr8_music_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->music_th }}" name="gr8_music_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARTS</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->arts }}" name="gr8_arts" class="form-control music" placeholder="" required></td>
                                                         <td>  <input type="number" value="{{ $student_gr8->arts_sec }}" name="gr8_arts_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->arts_rd }}" name="gr8_arts_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->arts_th }}" name="gr8_arts_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>PE</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->pe }}" name="gr8_pe" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->pe_sec }}" name="gr8_pe_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->pe_rd }}" name="gr8_pe_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->pe_th }}" name="gr8_pe_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>HEALTH</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->health }}" name="gr8_health" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->health_sec }}" name="gr8_health_sec" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->health_rd }}" name="gr8_health_rd" class="form-control music" placeholder="" required></td>
                                                        <td>  <input type="number" value="{{ $student_gr8->health_th }}" name="gr8_health_th" class="form-control music" placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ARALING PANLIPUNAN</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->ap }}" name="gr8_ap" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->ap_sec }}" name="gr8_ap_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->ap_rd }}" name="gr8_ap_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->ap_th }}" name="gr8_ap_th" class="form-control " placeholder="" required></td>
                                                    </tr>
                                                     <tr>
                                                        <td>ESP</td>
                                                        <td>  <input type="number" value="{{ $student_gr8->esp }}" name="gr8_esp" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->esp_sec }}" name="gr8_esp_sec" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->esp_rd }}" name="gr8_esp_rd" class="form-control " placeholder="" required></td>
                                                       <td>  <input type="number" value="{{ $student_gr8->esp_th }}" name="gr8_esp_th" class="form-control " placeholder="" required></td>
                                                    </tr>

                                                </tbody>

                                            </table>

                                    </div>
                                    </div>
                                  
                                  
                                    


<!-------  end  -->


                                    <hr/>
                                    <button type="submit" class="btn btn-warning w-25 btn-flat mt-2" >Save</button>
                                       
                                </form>  
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-flat" data-bs-dismiss="modal">Close</button>
                               
                            </div>
                            </div>
                        </div>
                  </div>

     