<?php
include '../header.php';
include '../navbar.php';

?>
<div class="container my-4">
    <br>
    <h2>Info User</h2>
    <?php if (isset($_SESSION['fb_id'])) : ?>
        <div class="card col-md-6">
            <div class="mx-auto mt-3">
                <div class="w-50"><?= $_SESSION['fb_pic']; ?></div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width:150px">Nama</th>
                            <td>: <?= $_SESSION['fb_name']; ?></td>
                        </tr>
                        <tr>
                            <th style="width:150px">Facebook ID</th>
                            <td>: <?= $_SESSION['fb_id']; ?></td>
                        </tr>
                        <tr>
                            <th style="width:150px">Facebook Email</th>
                            <td>: <?= $_SESSION['fb_email']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php elseif (isset($_SESSION['is_login_google'])) : ?>
        <div class="card col-md-6">
            <div class="mx-auto mt-3">
                <div class="w-100">
                    <img src="<?= $_SESSION['picture']; ?>" alt="">
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width:150px">Nama</th>
                            <td>: <?= $_SESSION['username'] ?></td>
                        </tr>
                        <tr>
                            <th style="width:150px">Google Email</th>
                            <td>: <?= $_SESSION['email']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else :
        include '../koneksi.php';

        $username = $_SESSION['username'];
        $sql = "SELECT *FROM tb_user WHERE username = '$username'";
        $result = mysqli_fetch_array(mysqli_query($konek, $sql));
    ?>
        <div class="card col-md-6">
            <div class="mx-auto mt-3">
                <img src="<?= ($result['pic']) ? $result['pic'] : "../img/icons8-user-100.png" ?>" alt="" style="width: 100px;">
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width:150px">Nama</th>
                            <td>: <?= $result['nama']; ?></td>
                        </tr>
                        <tr>
                            <th style="width:150px">Email</th>
                            <td>: <?= $result['email']; ?></td>
                        </tr>
                        <tr>
                            <th style="width:150px">Username</th>
                            <td>: <?= $result['username']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>
</div>
<?php include '../footer.php'; ?>