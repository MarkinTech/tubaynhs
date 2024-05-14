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
    <title>LOGIN</title>
  </head>
  <body>



<?php
    if(isset($_SESSION['failed']) && $_SESSION['failed'] == '200'){ 

    ?>
    <div class="alert alert-light text-center  text-danger btn-flat position-absolute w-50 shadow d-flex" style="z-index: 600; top: -20px;left:25%;">
      <div class="spinner-border "  role="status"  style="width: 25px; height:25px">
          <span class="visually-hidden ">Loading...</span>
    </div>
    <span ><i class="fas fa-times-circle  d-none"  style="font-size: 20px" > </i><small id="icon"></small> </span></div>
      
        <script type="text/javascript">
            $(function(){
              $('.alert').animate({marginTop: "+=40px"},500, "linear");

              
                 setTimeout(function(){

                    $('.spinner-border').addClass('d-none');
                    $('.fa-times-circle').removeClass('d-none');
                    $('#icon').text(' Invalid username or password!');
                     setTimeout(function(){
                      $('.alert').addClass('d-none');
                    },2000)
                    
                 },500)


            })
        </script>

    <?php   

     }
     unset($_SESSION['failed']);

        ?>




    <div class="container bg-transparent">

     
    	<form class="form-signin m-auto p-2 shadow" method="POST" action="../sf10-jhs/login.php">
         <h4 class="bg-info text-center"><img src="../sf10-jhs/img/sf10_2.png" width="450"></h4>
    		<h4 class="text-muted text-center font-weight-bold">LOGIN</h4>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" class="form-control" name="username" required="">
    	</div>	
    	<div class="input-group">		
    		<label>Password</label>
    		<input type="password" id="password" class="form-control" name="password" required="">
    		
    	</div>	
    	<div class="input-group">		
    		<label>Show Password</label>
    		<input type="checkbox" onclick="showpass()" name="">
    		
    	</div>	
    	<div class="d-flex-row p-2">		
    		
    		<button type="submit"  class="btn btn-sm btn-primary  btn-flat" name="">Login</button>
    		<a href="../sf10-jhs/signup.php" class="btn btn-sm btn-info text-light btn-flat " >Create Account</a>
    		
    	</div>	
    	</form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../sf10-jhs/popper/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
    	function showpass(){
    		var id = document.getElementById('password');
    		if(id.type == 'password'){
    			id.type = 'text';
    		}
    		else{
    			id.type = 'password';
    		}
    	}

    </script>	
   
  </body>
</html>

