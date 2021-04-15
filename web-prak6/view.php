<?php
require_once('koneksi.php');
$sql = "SELECT *FROM user";
$result = mysqli_query($konek, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5 p-3 border-0">
                    <h4 class="p-3">Records Regristasi</h4>
                    <div class="d-grid d-flex justify-content-end mb-3">
                        <a href="index.php" class="btn btn-sm btn-success">Add new record</a>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $userid = $row['user_id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $age = $row['age'];
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <th><?php echo $userid ?></th>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $age ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $userid ?>" class="btn btn-sm btn-success">Edit</a>
                                            <a href="delete.php?id=<?php echo $userid ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                            <?php }
                            } else $kosong = "<h4 class='d-flex justify-content-center text-danger'>Tidak ada record</h4>";
                            ?>
                        </tbody>
                    </table>
                    <?php echo $kosong ?? '' ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>