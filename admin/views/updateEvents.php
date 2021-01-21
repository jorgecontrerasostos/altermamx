<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Services</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container w-25 border border-primary mt-5">
        <form action="?c=evento&a=Actualizar&gui=evento" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                    value="<?php echo $entidadEvento->name; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" placeholder="Description" name="description"
                    value="<? echo $entidadEvento->description; ?>">
            </div>
            <div class="form-group">
                <label for="venue">Venue:</label>
                <input type="text" class="form-control" id="venue" placeholder="Enter venue" name="venue"
                    value="<?php echo $entidadEvento->venue; ?>">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" class="form-control" id="date" placeholder="Enter date" name="date"
                    value="<?php echo $entidadEvento->date; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Editar</button>
            <input type="hidden" class="form-control" id="event_id" placeholder="Enter id" name="event_id"
                value="<?php echo $entidadEvento->event_id; ?>">
        </form>

    </div>
</body>

</html>