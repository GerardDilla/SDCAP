<div class="col-md-12"><!--FOOTER--!-->
       
        <div class="row" style="background-color: rgba(0,0,0,0.5); color:#FFF; font-size:16; margin-top:auto; margin-bottom:auto; height:50px; line-height:50px; height:auto;">
  
        <span style="margin-left:20px; margin-top:20px; margin-bottom:20px;">
        </span>
        
        <p style="padding:5px 5px 5px 20px; font-size:90%;">This is the pre-alpha version of the Student Portal. Some features may be unstable and some data might not be complete.</p>
        
        </div>
       
</div><!--FOOTER--!-->
       
       
</div>
</div>
</div><!--Content--!-->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
			
            function printpage(){
				window.print();
				}

</script>
<script>
$("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
</script>

<script>
var xhttp;
 
 if (str == "") {
   document.getElementById("Diary").innerHTML = "";
       $("#ReadEntry").modal('hide');
   return;
 }
 
 xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
   document.getElementById("Diary").innerHTML = this.responseText;
       
   }
 };
 
 xhttp.open("GET", "<?php echo base_url(); ?>index.php/Student/Diary_load?q="+str, true);
 xhttp.send();
 $("#ReadEntry").modal('show');
 CKEDITOR.instances.entry_edit.setData("");
</script>

</body>



</html>
