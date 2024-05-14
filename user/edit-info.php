

 <?php


      if(isset($_SESSION['edit-student-status']) && $_SESSION['edit-student-status'] == '200'){
        ?>

       
      
        <script type="text/javascript">
            $(function(){

            	Swal.fire({
				toast: true,
				title:'OK!',
				position: 'top',
				text: 'Edit Successfull!',
				icon: 'success',
				showConfirmButton: false,
				timer: 2000,
				timerProgressBar: true
				})	


            /*  $('.alert').animate({marginTop: "+=90px"},500, "linear");

              
                 setTimeout(function(){

                    $('.spinner-border').addClass('d-none');
                    $('.fa-check-circle').removeClass('d-none');
                    $('#icon').text(' Edit Successfull!');
                     setTimeout(function(){
                      $('.alert').addClass('d-none');
                    },2000)
                    
                 },300)
			*/

            })
        </script>


        <?php
      }
      unset($_SESSION['edit-student-status']);



if($_GET){

	  $id = '';
       require('../user/components/dbconnect.php');

       if(isset($_GET['id'])){
        $query = "SELECT * FROM student where stud_no = '".base64_decode($_GET['id'])."'";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_array($res);

            $id = $row['stud_no'];

?>





<form class="form-signin p-3 m-auto shadow" action="../user/add.php"  method="POST">
				<div class="border-bottom mb-4">
					<img src="../img/stud.jpg" style="width: 100%;">
					<h5 class="mt-4"><i class="fas fa-edit"></i> Edit Student Info</h5>
				</div>
      		<div class="row mt-5" >
      			<div class="col-md-6 order-md-1">
      				<input type="hidden" class="form-control" name="stud_no" value="<?php echo $row['stud_no']?>" id="stud_no" required="">
      				<div class="form-group mt-2">
		      			<label>First Name</label>
		      			<input type="text" class="form-control" name="fname" value="<?php echo $row['fname']?>" id="fname" required="">
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Middle Name</label>
		      			<input type="text" class="form-control" name="mname" id="mname" value="<?php echo $row['mname']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Last Name</label>
		      			<input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Extension</label>
		      			<input type="text" class="form-control" name="ext" id="ext" value="<?php echo $row['ext']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Date of Birth</label>
		      			<input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row['dob']?>" required>
		      		</div>
		      		<div class="form-group  mt-4">
		      			<div class="row">
		      				<div class="col-md-6 order-md-1 mt-1"  >
		      					<div class="form-group mt-3">
		      						<label>Gender</label>
		      						<select class="form-select" name="gender" id="gender" value="<?php echo $row['gender']?>" required>
		      							<option value="Male" selected>Male</option>
		      							<option value="Female">Female</option>
		      						</select>
		      					</div>
		      				</div>
		      				<div class="col-md-6 order-md-2 mt-1" >
		      					<div class="form-group mt-3">
		      					<label>Age</label>
		      					<input type="number" class="form-control" name="age" id="age" value="<?php echo $row['age']?>" required>
		      				    </div>
		      			     </div>
		      			</div>
		      			
		      		</div>
		      		
      			</div>
      			<div class="col-md-6 order-md-2">
      				
      				<div class="form-group mt-2">
		      			<label>LRN</label>
		      			<input type="text" class="form-control" name="lrn" id="lrn" value="<?php echo $row['lrn']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Name of School from Elementary</label>
		      			<input type="text" class="form-control" name="elem_school" id="elem_school" value="<?php echo $row['elem_school']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>School ID</label>
		      			<input type="text" class="form-control" name="elem_school_id" id="elem_school_id" value="<?php echo $row['elem_school_id']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>School Address</label>
		      			<input type="text" class="form-control" name="elem_address" id="elem_address" value="<?php echo $row['elem_address']?>" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>General Average</label>
		      			<input type="text" class="form-control" name="gen_avg" id="gen_avg" value="<?php echo $row['gen_avg']?>" required>
		      		</div>
		      		
      			</div>
      			
      		</div>
      		
      		 <div class="modal-footer p-0">
		         <a href="./home.php" class="btn btn-info bg-gradient btn-flat" ><i class="fas fa-angle-left"></i> Back </a>
		        <button type="submit" class="btn btn-primary bg-gradient btn-flat" id="submit_edit" name="submit_edit">Save Edit </button>
     		 </div>
      		</form>
    

    <?php

  }}}

?>