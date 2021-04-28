<?php
session_start();
if (
    !isset($_SESSION['is_login']) ||
    $_SESSION['is_login'] !== true
) {
    header('Location: login.php');
    exit;
}
$username = $_SESSION['username'];
if (isset($username)) {
    include 'config.php';
    include 'opendb.php';

    $result = mysqli_query($conn, "SELECT *FROM user WHERE username = '$username'");
    $row = mysqli_fetch_array($result);
    if ($row > 0) {
        $nrp = $row['nrp'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $tgl_lahir = $row['tgl_lahir'];
        $email = $row['email'];
        $no_hp = $row['no_hp'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile user| <?= $_SESSION['nama'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php include 'sidebar.php' ?>

        <div id="content">

            <?php include 'navbar.php' ?>
            <h3>Profile User</h3>
            <div class="mt-4 row">

                <div class="col-lg-4">
                    <div class="text-center p-4 shadow-sm">
                        <img src="img/ft_profile.jpg" class="rounded" style="width: 200px; height: auto;" alt="...">
                    </div>
                </div>
                <div class="col-lg-5">
                    <table class="table table-hover shadow-sm">
                        <tr>
                            <th>NRP</th>
                            <td><?= $nrp ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= $alamat ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td><?= date('d-F-Y', strtotime($tgl_lahir)) ?></td>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <td><?= $no_hp ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $email ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>

</html>