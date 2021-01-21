<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<title>Contact us</title>
<div class="container">
    <form class="mt-5" action="send.php" method="POST">
        <h3>Share your idea!</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Share your idea!</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="idea"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
<?php require '../includes/footer.php'; ?>