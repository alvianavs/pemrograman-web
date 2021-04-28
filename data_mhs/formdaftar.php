<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Login page</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="container d-flex justify-content-center">
            <div class="mt-4 col-lg-6">
                <form action="daftar.php" method="POST" class="p-4 border rounded text-center shadow-sm">
                    <h3>Silahkan Mendaftar</h3>
                    <div class="my-3 row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="ex. 32104214.." required>
                                <label for="nrp">NRP</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                <label for="nama">Nama</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
                        <label for="alamat">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                        <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email address" required>
                                <label for="nrp">Email address</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP" required>
                                <label for="no_hp">No HP</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Account Form</h5>
                    <div class="row g-2 my-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 d-grid">
                        <button type="submit" name="submit" class="btn bg-ocean text-white">Daftar</button>
                    </div>
                    <a href="login.php" class="text-primary">Login</a>
                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>