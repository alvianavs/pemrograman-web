<?php
require_once('koneksi.php');

if (isset($_POST['update']))
{
    $userid = $_GET['id'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE user SET username = '".$username."', email = '".$email."', age = '".$age."' WHERE user_id='".$userid."'";
    $result = mysqli_query($konek, $sql);

    if ($result)
    {
        header("location:view.php");
    } else {
        echo "Please check your query";
    }
} else {
    header("location:view.php");
}

?>