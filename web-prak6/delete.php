<?php
require_once('koneksi.php');

if (isset($_GET['id']))
{
    $userid = $_GET['id'];
    $sql = "DELETE FROM user WHERE user_id = " . $userid;
    $result = mysqli_query($konek, $sql);

    if ($result) {
        header("location:view.php");
    } else {
        echo "Please check your query";
    }
}
?>