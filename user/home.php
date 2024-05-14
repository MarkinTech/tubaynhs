
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php
      session_start();
    	include '../user/components/header.php';


       if(!isset($_SESSION['user'])){
          header('location: ../index.php');
      }

      $s = isset($_GET['page']) ? $_GET['page'] :'';

    ?>
    <title><?php if($s==''){ echo 'home';}else{echo $s;} ?></title>
  </head>
  <body >
  	<nav class="navbar navbar-expand-lg  navbar-light bg-primary bg-gradient p-0 shadow">
  <div class="container-fluid p-0 pl-2 text-light">
    <a class="navbar-brand font-weight-bold text-light" href="#"><img src="../img/sf10_2.png" width="250"></a>
    <button class="navbar-toggler bg-secondary p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon p-2 "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-light">
        <li class="nav-item">
          <a class="nav-link <?php echo($s=="view")?'active': '' ?>" aria-current="page" href="./home.php?page=view">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo($s=="new_student")?'active': '' ?>" href="./home.php?page=new_student" >Add Student</a>
        </li>
       
       
      </ul>

    </div>
     <div class="dropdown text-center  p-2 mr-5"   >
       <button class="btn btn-secondary dropdown-toggle bg-transparent text-light border-0 m-auto " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:14px">
                                    Hello <?php echo $_SESSION['user']['fname']?> <span class="fas fa-user"></span>
                                </button>
                                <ul class="dropdown-menu mr-5" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="./?s=manage_account"><i class="fas fa-cog"></i> Manage Account</a></li>
                                    <li><a class="dropdown-item" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
        </div>
  </div>
</nav>
    
    <?php
      if(isset($_SESSION['add-student-status']) && $_SESSION['add-student-status'] == '200'){
        ?>

         <div class="alert alert-light text-center  text-success btn-flat position-absolute w-50 shadow d-flex" style="z-index: 100; top: -20px;left:25%;">
    
        <span ><i class="fas fa-check-circle  d-none"  style="font-size: 20px" > </i><small id="icon"></small> </span></div>
      
        <script type="text/javascript">
            $(function(){
              $('.alert').animate({marginTop: "+=90px"},500, "linear");

              
                 setTimeout(function(){

                    $('.spinner-border').addClass('d-none');
                    $('.fa-check-circle').removeClass('d-none');
                    $('#icon').text(' Added Successfully!');
                     setTimeout(function(){
                      $('.alert').addClass('d-none');
                    },2000)
                    
                 },300)


            })
        </script>


        <?php
      }
      unset($_SESSION['add-student-status']);

     if(isset($_SESSION['del-status']) && $_SESSION['del-status'] == '200'){
        ?>

          <div class="alert position-absolute w-50" id="alert"  style="z-index: 50; top: 60px; left: 25%; background-color:lightgreen ;"><span class="fas fa-check-circle"></span> Delete Successful!</div>
          <script type="text/javascript">
             $('#alert').hide();
              $('#alert').show(1000);
               $('#alert').hide(4000);
          </script>


        <?php
      }
      unset($_SESSION['del-status']);

    ?>

    <div class="container bg-transparent mt-1">
    	 
       <?php
       

          if($s=='view'){
            include $s.'.php';
           }
           else if($s=='new_student'){
            include $s.'.php';
          }
          else if($s=='edit'){
            include $s.'.php';
          }
           else if($s=='add_student_record'){
            include $s.'.php';
          }
           else if($s=='edit_student_record'){
            include $s.'.php';
          }
           else if($s=='edit-info'){
            include $s.'.php';
          }
          else{
            include 'view.php';
          }


       ?>

    	
    </div>

    <?php
    include 'modal.php';
    
    ?>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../popper/js/bootstrap.bundle.min.js"></script>

	<!-- For fixed Column this must be the ordering of the libraries -->
	<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>


	<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="../DataTables/FixedColumns-4.0.1/js/dataTables.fixedColumns.min.js"></script>
  

<script type="text/javascript">
$( document ).ready(function() {
var table = $('#student_table').DataTable( {
        scrollY:  "800px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
	
        fixedColumns:   {
           
           rightColumns:1
          
        },
        "lengthMenu": [ [5,10, 25, 50, -1], [5,10, 25, 50, "All"] ],
          "iDisplayLength": 1000
        
	});



$(document).on('click','#edit',function(){
    $('#staticBackdrop').modal('show');
})
$(document).on('click','#del',function(){
  var id = $(this).data("id");
  var id2 = $(this).data("id2");
  $('#delete-student').val(id);
  $('#delete-student-name').val(id2);
    $('#delModal').modal('show');
})

  

});
</script>

<style>


  th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 100%;
      margin-left: 0px;
    }
 		
    tr { height: 40px; }
 </style>
   
  </body>
</html>

