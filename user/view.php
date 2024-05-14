
        
<form class="form-signin select bg-light p-3 m-auto btn-flat w-100 mt-4 shadow"   action="../user/select.php" method="POST" >
    <div class="row pl-2 pr-2" style="width: 100%;">
    <div class="col-md-4 order-md-1 p-1 mt-3">
    <label class="bg-light font-weight-bold">Select Grade</label>
    <select class="form-select" name="grade" required="">
        <option selected></option>
         <option value="ALL">ALL</option>
         <option value="GRADE 7">GRADE 7</option>
          <option value="GRADE 8">GRADE 8</option>
           <option value="GRADE 9">GRADE 9</option> 
            <option value="GRADE 10">GRADE 10</option>
    </select>
   </div>
   <div class="col-md-4 order-md-2 p-1 mt-3">
     <label class="bg-light font-weight-bold">Select Academic Year</label>
    <select class="form-select" name="ay" required="">
        <option selected></option>
         <option value="2022-2023">2022-2023</option>
          <option value="2023-2024">2023-2024</option>
           <option value="2024-2025">2024-2025</option>
            <option value="2025-2026">2025-2026</option>
             <option value="2026-2027">2026-2027</option>
              <option value="2027-2028">2027-2028</option>
        
    </select>
    
  </div>
   <div class="col-md-2 order-md-3 p-1 mt-3">
       <button type="submit" class="btn btn-flat btn-primary p-2 w-100" name="select">DISPLAY</button>
   </div>
    <div class="col-md-2 order-md-4 p-1 mt-3" >
       
       <a href="../user/select.php"  class="nav-link p-2 text-primary  font-weight-bold w-100 text-center bg-light" name="select">DISPLAY ALL</a>
      
   </div>
</div>
</form>
 
<div class="row shadow">
    		
    		<div class="col-md-12 order-md-1 p-4 mt-2 bg-light" >
                <div class="bg-primary bg-gradient text-light p-2" ><h4><?php echo isset($_SESSION['grade'])?$_SESSION['grade']:''?> - <?php echo isset($_SESSION['ay'])?$_SESSION['ay']:''?> &nbsp;List of Students </h4></div>
    			
    			<div class="tabe-responsive mt-3">
    			<table class="table  table-hover " id="student_table" style="width:100%;">
    				<thead class="text-center">
    					<tr style="font-size: 12px;">
    						<th class="bg-light">No</th>
    						<th class="bg-light">First Name</th>
    						<th class="bg-light">Middle Name</th>
    						<th class="bg-light">Last Name</th>
                            <th class="bg-light">LRN</th>
    						<th class="bg-light">Action</th>
    					</tr>
    				</thead>
    				<tbody class="text-center">

               <?php
               
                require('../user/components/dbconnect.php');


                $count=0;

                if(isset($_SESSION['grade']) && isset($_SESSION['ay']) && $_SESSION['grade']!='ALL' ){
                     $query = "SELECT * FROM student 
                    inner join grade_level
                    on grade_level.stud_no = student.stud_no
                    where grade_level.grade = '".$_SESSION['grade']."' and grade_level.ay='".$_SESSION['ay']."'";
                     $res = mysqli_query($conn, $query);
                }
                else if(isset($_SESSION['grade']) && isset($_SESSION['ay']) && $_SESSION['grade']=='ALL' ){
                     $query = "SELECT * FROM student 
                    inner join grade_level
                    on grade_level.stud_no = student.stud_no
                    where grade_level.ay='".$_SESSION['ay']."'";
                     $res = mysqli_query($conn, $query);
                }
                else{
              
                     $query = "SELECT * FROM student ";
                        $res = mysqli_query($conn, $query);
                 }
             
                if(mysqli_num_rows($res)>0){
                  while($row = mysqli_fetch_array($res)):
                     $count= $count+1;
                     if($row['ext'] == 'NONE'){
                        $ext = '';
                     }
                     else{
                         $ext =', '.$row['ext'];
                     }
                    ?>

                   <tr style="font-size: 12px;">
	                 <td><?php echo  $count ?></td>
	                 <td><?php echo $row['fname'].$ext  ?></td>
	                 <td><?php echo $row['mname'] ?></td>
	                 <td><?php echo $row['lname']?></td>
                     <td><?php echo $row['lrn'] ?></td>
	                 <td>
                                

                        <button type="button" data-id="<?php echo $row['stud_no']  ?>" data-id2="<?php echo $row['fname'].' '. $row['mname'].' '.$row['lname'] ?>" class="btn btn-sm btn-flat btn-outline-danger" id="del"><span class="fas fa-trash"></span> Delete</button>
                       
                        <a  class="btn btn-sm btn-outline-primary btn-flat ml-3" href=" ./home.php?page=edit&id=<?php echo base64_encode($row['stud_no']) ?>" name="edit" title="View Records"><span class="fas fa-eye"  ></span> View</a>
                             

                        <a  class="btn btn-sm btn-outline-success btn-flat ml-3" href=" ./home.php?page=edit-info&id=<?php echo base64_encode($row['stud_no']) ?>"  title="Student Info"><span class="fas fa-edit"></span> Edit</a>
                  </td>
                  </tr>

                <?php endwhile;
                }
                 

                if(mysqli_num_rows($res)==0){
                 ?>

                 <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td> </td>
                              </tr>

                  
              <?php 
                }

               ?> 


    		
    				</tbody>
    				
    			</table>
    			</div>

    			
    		</div>

            
    	</div>