<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thông báo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="dmodal" class="modal fade" tabindex="-1" aria-labelledby="my-modal-title">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <?= $ann_title ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <?= $ann_content ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Try again</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var dmodal = new bootstrap.Modal(document.getElementById('dmodal'), {
            backdrop: "static"
        });
        dmodal.show();
    </script>
</body>

</html>