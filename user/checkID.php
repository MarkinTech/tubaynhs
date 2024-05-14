  <?php
        $id = '';
       require('../user/components/dbconnect.php');

       if(isset($_GET['id'])){
        $query = "SELECT * FROM student where stud_no = '".base64_decode($_GET['id'])."'";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_array($res);

            $id = $row['stud_no'];
             ?>  

            
             Student Name | <b class="text-success"> <?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']  ?> </b>
             <br>
             LRN | <b class="text-success"> <?php echo $row['lrn'] ?> </b>
              

            <?php 
             }
              else{
               ?>
               <script type="text/javascript">
                   location.replace("./home.php?page=view");
               </script>

            <?php
             }
         }




         if(isset($_GET['d'])){
        $query = "SELECT * FROM student 
                    inner join grade_level
                    on grade_level.stud_no = student.stud_no
                    where grade_level.no = '".base64_decode($_GET['d'])."'";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_array($res);
             $id = $row['stud_no'];
             $id2 = $row['no'];
             ?>  

            
            <small> Student Name | </small><b class="text-success"><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']  ?> </b>
            <br>
             LRN | <b class="text-success"> <?php echo $row['lrn'] ?> </b>
              

            <?php 
             }
              else{
               ?>
               <script type="text/javascript">
                   location.replace("./home.php?page=view");
               </script>

            <?php
             }
         }

                        
      ?>                  