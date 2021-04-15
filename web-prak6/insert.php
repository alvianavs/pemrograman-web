<?php

require_once 'koneksi.php';

if (isset($_POST['submit']))
{
    if (empty($_POST['name']) || empty($_POST['email']))
        echo "Please fill in the blanks";
    else {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "INSERT INTO user (username, email, age) VALUES('$username', '$email', '$age')";
        $result = mysqli_query($konek, $sql);

        if ($result) {
            header("location:view.php");
        }
        else {
            echo "Please check your query";
        }
    }
} else {
    header("location:index.php");
}

?>