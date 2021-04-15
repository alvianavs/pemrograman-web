<?php
require_once('koneksi.php');
$id = $_GET['id'];
$sql = "SELECT *FROM user WHERE user_id=".$id;
$result = mysqli_query($konek, $sql);
while ($row = mysqli_fetch_assoc($result))
{
    $userid = $row['user_id'];
    $username = $row['username'];
    $email = $row['email'];
    $age = $row['age'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5 border-0 rounded">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">
                            Update Form di PHP
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php?id=<?php echo $userid ?>" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username.." value="<?php echo $username ?>">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email.." value="<?php echo $email ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="age" name="age" placeholder="Umur..." value="<?php echo $age ?>">
                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>