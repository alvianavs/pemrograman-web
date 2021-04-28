<?php
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{
    $_SESSION['username'] = $_POST['nama'];
    header("location:tampilnama.php");
}
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
                Tugas Session
            </h5>
            <div class="card-body d-flex justify-content-center">
                <div class="w-50">
                    <h5 class="card-title">Form Registrasi</h5>
                    <form action="" method="POST" onsubmit="return cekForm();">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="username">
                            <label for="nama">Masukkan nama</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var nama = document.getElementById("nama");
    function cekForm()
    {
        if(nama.value == '')
        {
            alert("Kolom nama tidak boleh kosong!");
            return false;
        }
    }
</script>
</html>