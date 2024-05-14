

<form class="form-signin p-3 m-auto shadow" action="../user/add.php"  method="POST">
				<div class="border-bottom mb-4">
					<img src="../img/stud.jpg" style="width: 100%;">
					<h5 class="mt-4"><i class="fas fa-user-plus"></i> Add New Student</h5>
				</div>
      		<div class="row mt-5" >
      			<div class="col-md-6 order-md-1">
      				
      				<div class="form-group mt-2">
		      			<label>First Name</label>
		      			<input type="text" class="form-control" name="fname" id="fname" required="">
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Middle Name</label>
		      			<input type="text" class="form-control" name="mname" id="mname" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Last Name</label>
		      			<input type="text" class="form-control" name="lname" id="lname" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Extension</label>
		      			<input type="text" class="form-control" name="ext" id="ext" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Date of Birth</label>
		      			<input type="date" class="form-control" name="dob" id="dob" required>
		      		</div>
		      		<div class="form-group  mt-4">
		      			<div class="row">
		      				<div class="col-md-6 order-md-1 mt-1"  >
		      					<div class="form-group mt-3">
		      						<label>Gender</label>
		      						<select class="form-select" name="gender" id="gender" required>
		      							<option value="Male" selected>Male</option>
		      							<option value="Female">Female</option>
		      						</select>
		      					</div>
		      				</div>
		      				<div class="col-md-6 order-md-2 mt-1" >
		      					<div class="form-group mt-3">
		      					<label>Age</label>
		      					<input type="number" class="form-control" name="age" id="age" required>
		      				    </div>
		      			     </div>
		      			</div>
		      			
		      		</div>
		      		
      			</div>
      			<div class="col-md-6 order-md-2">
      				
      				<div class="form-group mt-2">
		      			<label>LRN</label>
		      			<input type="text" class="form-control" name="lrn" id="lrn" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>Name of School from Elementary</label>
		      			<input type="text" class="form-control" name="elem_school" id="elem_school" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>School ID</label>
		      			<input type="text" class="form-control" name="elem_school_id" id="elem_school_id" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>School Address</label>
		      			<input type="text" class="form-control" name="elem_address" id="elem_address" required>
		      		</div>
		      		<div class="form-group mt-4">
		      			<label>General Average</label>
		      			<input type="text" class="form-control" name="gen_avg" id="gen_avg" required>
		      		</div>
		      		
      			</div>
      			
      		</div>
      		
      		 <div class="modal-footer p-0">
		       
		        <button type="submit" class="btn btn-primary bg-gradient btn-flat" id="submit_add" name="submit_add">Add Student</button>
     		 </div>
      		</form>
    