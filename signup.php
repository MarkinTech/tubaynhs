	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
<?php
	session_start();
    include '../sf10-jhs/components/header.php';

  
      if(isset($_SESSION['user']['fname'])){
          header('location: ../sf10-jhs/user/home.php');
      }
    
    

?>


    <title>Signup</title>
  </head>
  <body class="btn-green">






<div class="container bg-transparent">
	<form class="form-signin bg-white text-muted p-3 w-75 m-auto shadow" method="POST" onsubmit="return checkpw()"  action="../sf10-jhs/register.php">
		 <h4 class="bg-info text-center"><img src="../sf10-jhs/img/sf10_2.png" width="450"></h4>
        		<h4 class="text-center">USER REGISTRATION</h4>
        		<div class="row mt-4" >

        				<div class="col-md-6 order-md-1">
		        		
		        		<div class="form-group">
		        			<label>First Name</label>
		        			<input type="text" pattern="[a-zA-Z]{1,40}" class="form-control" name="fname" required="">
		        		</div>
		        		<div class="form-group">
		        			<label>Middle Name</label>
		        			<input type="text" pattern="[a-zA-Z]{1,40}"  class="form-control" name="mname" required="">
		        		</div>
		        		<div class="form-group">
		        			<label>Last Name</label>
		        			<input type="text" pattern="[a-zA-Z]{1,40}" class="form-control" name="lname" required="">
		        		</div>
		        		
		        		
		        </div>

		        <div class="col-md-6 order-md-2" style="border-left: 1px solid gray;">


		        	
		        		<div class="form-group">
		        			<label>Username</label>
		        			<input type="text" pattern="[a-zA-Z0-9]{1,40}" class="form-control" name="username" required="">
		        		</div>
		        		
		        		<div class="form-group">
		        			<label>Password</label>
		        			<input type="password"  id="password" class="form-control" name="password" required="">
		        		</div>
		        		<div class="form-group">
		        			<label>Re-type Password</label>
		        			<input type="password" id="password2"   class="form-control" name="password2" required="">
		        			<span class="text-danger" id="pw_match_error" style="display: none;">Unmatched password</span>
		        		</div>
		        			<input type="checkbox" class="mb-3" onclick="showpass()"> Show password
		        	</div>
        		</div>
        		<div class="form-group">
		        			<label>Position</label>
		        			<input type="text" pattern="[a-zA-Z]{1,40}" class="form-control" name="position">
		        		</div>

				  <div class="modal-footer">
		   		 <a href="../sf10-jhs/index.php" class="btn btn-info btn-flat text-light"><i class="fas fa-angle-left"></i> Back</a>
		        <button type="submit" class="btn btn-primary btn-flat text-light">Signup</button>
		      </div>

        	</form>

        	</div>

</body>
</html>


<script type="text/javascript">
	
function showpass(){
  		var id= document.getElementById("password");
  		var id2= document.getElementById("password2");
  		var id3= document.getElementById("password3");
  		if(id.type == "password" || id2.type == "password"){
  			id.type= "text";
  			id2.type= "text";
  		}else{
  			id.type="password";
  			id2.type="password";
  		}


  		if(id3.type == "password"){
  			id3.type= "text";
  			
  		}else{
  			id3.type="password";
  			
  		}
  	}

  	function checkpw(){
  		var id= document.getElementById("password").value;
  		var id2= document.getElementById("password2").value;
  		if(id == id2 ){
  			document.getElementById('pw_match_error').focus();
  			return true;
  		}
  		else{
  			document.getElementById('pw_match_error').style.display='block';
  			document.getElementById('pw_match_error').focus();
  			return false;
  		}
  	}
</script>