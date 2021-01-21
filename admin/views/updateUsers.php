<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container w-25 border border-primary mt-5">
        <form action="?c=usuario&a=Actualizar&gui=usuario" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                    value="<?php echo $entidadUsuario->name; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value="<? echo $entidadUsuario->email; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"
                    value="<?php echo $entidadUsuario->password; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Editar</button>
            <input type="hidden" class="form-control" id="user_id" placeholder="Enter id" name="user_id"
                value="<?php echo $entidadUsuario->user_id; ?>">
        </form>

    </div>
</body>

</html>