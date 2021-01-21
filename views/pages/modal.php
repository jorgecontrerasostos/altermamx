<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Open Bootstrap Modal on Page Load</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="../../admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(window).on('load', function() {
        $("#myModal").modal('show');
    });
    </script>
</head>

<body>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thank you for reaching us!</h5>
                </div>
                <div class="modal-body">
                    <p>We will be contacting you soon!</p>
                </div>
                <a href="../index.php" class="btn btn-dark">Back to alterma.mx</a>
            </div>
        </div>
    </div>
</body>

</html>