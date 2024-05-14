



 <!---Modal delete Student--->	
		<div class="modal fade" id="delModal" data-bs-backdrop="static" tabindex="5" aria-labelledby="exampleModalLabel" >
		  <div class="modal-dialog " >
		    <div class="modal-content" >
		    	
		    
		       <div class="modal-body  text-center text-muted"   >
		      	 <form action="../user/delete.php" method="POST" class="p-0">
		     			<h5 class="p-0 "> Are you sure you want to delete this Student?</h5>
		     			<input type="text" name="delete-student-name" class="form-control text-muted text-center p-0 font-weight-bold" id="delete-student-name" readonly style="border:none; background-color: white; font-size:25px"><br>
		     			<div class="d-flex">
		     			<button type="submit" id="delete-student" name="delete-student" class="btn btn-primary btn-flat bg-gradient w-50" >Yes</button>
		     			 <button type="button" class="btn btn-info w-50 editRead-close btn-flat ml-1 bg-gradient" data-bs-dismiss="modal">No</button>
		     			 </div>
		     			</form>
		      </div>

			    
			     <div class="modal-footer p-0">
					        <button type="button" class="btn btn-secondary editRead-close" data-bs-dismiss="modal">Close</button>
					       
				  </div>
			 </div>
				 
		    </div>	
		    </div>		








