
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?=$alert_title?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p class="alert-txt"><?=$alert?></p>
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <a href="<?=$link_tieptuc?>" class="btn btn-danger">Tiếp tục</a>
      
      </div>

    </div>
  </div>
</div>

<script>
      var myModal = new bootstrap.Modal(document.getElementById('myModal'),{backdrop: "static"});
            myModal.show();
  </script>
</body>
</html>

