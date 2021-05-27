<?php
session_start();
$errMsg = '';
if (isset($_POST['submit']))
{
    include 'config.php';
    include 'opendb.php';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT nama, username, password FROM user WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);
    list($nama, $username, $password) = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0)
    {
        if (password_verify($pass, $password)) {
            $_SESSION['nama'] = $nama;
            $_SESSION['username'] = $username;
            $_SESSION['is_login'] = true;
            header("Location: main_admin.php");
            exit;
        } else
            $errMsg = "Password yang anda masukkan salah!";
    } else
        $errMsg = "Username tidak ditemukan!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | Login page</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="container d-flex justify-content-center">
            <div class="mt-5 col-lg-4">
                <form action="" method="POST" class="mt-5 p-4 border rounded text-center shadow-sm">
                    <h3>Silahkan Login</h3>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required>
                        <label for="pass">Password</label>
                    </div>
                    <div class="my-3 d-grid">
                        <button type="submit" name="submit" class="btn bg-ocean text-white">Login</button>
                    </div>
                    <a href="formdaftar.php" class="text-primary">Daftar</a>
                </form>
                <p class="mt-3 text-danger text-center"><?php echo $errMsg ?></p>
                <p class="mt-3 text-success text-center"><?php echo $_SESSION['pesan'] ?? '' ?></p>
            </div>
            </div>

        </div>
    </div>
</body>

</html>
<?php
unset($_SESSION['pesan']);
?>