<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="mt-5 card border-0">
            <h5 class="card-header bg-success text-white">
                Menampilkan nama
            </h5>
            <div class="card-body d-flex justify-content-center">
                <div class="w-50 d-flex align-items-center">
                    <h6 class="card-title">Saya masih tau anda adalah <b><?php echo $_SESSION['username']; ?></b> meskipun anda berada di halaman lain</h6>
                </div>
                <div class="w-25">
                    <div class="list-group">
                        <a href="tampilnama.php" class="list-group-item list-group-item-action">
                            Halaman ini
                        </a>
                        <a href="pagelain.php" class="list-group-item list-group-item-action active">Halaman lain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>