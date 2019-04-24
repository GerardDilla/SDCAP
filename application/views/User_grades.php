<meta charset="UTF-8">
<?php 

		$sem = $this->input->post('getSEM');
	  	$sy = $this->input->post('getSY');
			
			if($sy == ""){
				$test3 = 1;
				$css = "panel-collapse collapse in";
				
							}
				else{
					$test3 = 2;
					$css = "panel-collapse collapse";
				
					}
?>
<!--content--!-->
<div id="page-content-wrapper" style="width:100%; cursor:default; min-height:600px;">
	<div class="container-fluid">
		<div class="row" style="margin-top:auto; margin-bottom:auto;">
        <div class="col-md-12"><!--HEADER--!-->
        
        <div class="row content-title"><span style="margin-left:50px; margin-top:20px; margin-bottom:20px;" class="glyphicon glyphicon-education"></span> Grades</div>
          
        </div><!--HEADER--!-->
        
        <div class="col-md-12" id="ContentContainer"><!--BODY--!-->
        <div class="container row" id="alignment" style="margin-top:50px; margin-bottom:30px; min-height:auto; overflow-y:auto;">
  		
     
    <div class="panel-group" id="accordion" style="min-width:250px;" ><!--accordion1--!-->
    <div class="panel panel-default" ><!--panel1--!-->
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> 	
      <div class="panel-heading" style="background-color:#666; color:#FFF;">
        <h4 class="panel-title">
          Choose Year and Semester: 
        </h4>
      </div>
      </a>
      <div id="collapse1" class="<?php echo $css; ?>">
        <div class="panel-body"><!--CONTENT--!-->
        
        
   <form action="<?php echo site_url();?>index.php/Student/grades" method="post" style="margin-top:30px;">
    <div class="form-group">
      <label for="sel1">Academic Year:</label>
      <select class="form-control" name="getSY" id="sel1" onchange="showcont(this.value)">

      
      <?php
	  echo $resultSY;	
	  ?>
      
      </select> 
    </div>
    
     <div id="cont_appear" class="form-group" style="display:none;">
      <label for="sel1">Semester:</label>
      <div id="acad_sem">
      <select class="form-control" name="getSEM" id="sel2">
      
  	 
	  	
      </select> 
      </div>
    </div>
   
   
          <button id="btn_appear" class="btn center-block" style="margin:auto; margin-bottom:30px; margin-top:20px; width:100px; display:none;	" name="submit" id="submitD" type="submit">Select</button>
		
  </form>

  
    </div><!--CONTENT--!-->
      </div>
    </div><!--panel1--!-->
  </div><!--accordion--!-->
  
  			

        <div id="hidden">
        
        <div class="section-to-print">
        
             <?php 	
			 
			  //DISPLAYS THE TABLE OUTPUT
                 echo $Grade_Output;
				 
				 
				 
             ?>
             
            
            </div>
            
		 </br>
         <button class="btn btn-success center-block" data-toggle="modal" data-target="#myModal" style="display:none">Complete List</button>  
      	 </br>
      
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="margin-top:50px;" tabindex="-1">
<div class="modal-dialog">
      
    <!-- Modal content-->
    <div class="modal-content" id="login" style="display:block; width:100%;">
	  
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:#666">&times;</button>
        <h3 class="modal-title" style="color:#666">Grades</h3>
        
      </div>
      
      <div class="">
      <div class="modal-body divprint" style="min-width:auto; overflow:auto; min-height:400px; font-size:14px;">
         
                <?php 
				echo $All_Grades;
				?>
          </br></br>   
         	
       
      </div>
      </div>
      <div class="modal-footer">
         <button class="btn btn-success center-block" onclick="printpage()">Print</button>
         
         </form>
      </div>
  
    </div>

</div> 
</div>

 <!-- Modal -->  
      
            

            
         </div>
            
<script>
            var hidden = document.getElementById('hidden');
			var active = "<?php echo $test3 ?>";
			if(active == 1){
			hidden.style.display ="none";
			
			}
			else{
				hidden.style.display ="block";
				}


function showcont(str) {
  var xhttp;
 
  if (str == "") {
    document.getElementById("acad_sem").innerHTML = "";
    return;
  }
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("acad_sem").innerHTML = this.responseText;
	
    }
  };
  
  xhttp.open("GET", "<?php echo base_url(); ?>index.php/Student/get_sem?q="+str, true);
  xhttp.send();
  cont_appear.style.display="block";	
  btn_appear.style.display="block";	
  
}
</script>

          </div>
         
        </div><!--BODY--!-->