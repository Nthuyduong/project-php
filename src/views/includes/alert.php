<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title alert-txt"><?=$alert_title?></h4>
          <button type="button" class="alert-btn close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
          <p class="alert-txt"><?=$alert?></p>
        </div>
        <div class="modal-footer">
          <p><a href="<?=$link_tieptuc?>">Tiếp tục</a></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
 
<script>
$(document).ready(function(){
    $("#myModal3").modal({backdrop: "static"});
});
</script>
