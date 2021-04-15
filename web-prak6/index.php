<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5 border-0 overflow-hidden rounded">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">
                            Registrasi Form di PHP
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username..">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email..">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="age" name="age" placeholder="Umur...">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>