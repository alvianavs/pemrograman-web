<?php
session_start();
$errMsg = '';
if (isset($_POST['idUser']) && isset($_POST['passUser'])) {
    include 'config.php';
    include 'opendb.php';
    $userId = $_POST['idUser'];
    $password = $_POST['passUser'];

    $sql = "SELECT user_id FROM akun_mhs WHERE user_id = '$userId' AND user_pass ='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {

        $_SESSION['is_login'] = true;
        header('Location: main.php');
        exit;
    } else {
        $errMsg = 'Sorry, wrong username / password!';
    }
    include 'closedb.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h3 align="center">Masukkan Username dan Password anda.</h3>
    <?php
    if ($errMsg != '') {
    ?>
        <p align="center"><strong><font color="red"><?= $errMsg; ?></font></strong></p>
    <?php
    }
    ?>
    <form action="" method="post" name="frmLogin" id="frmLogin">
        <table width="400" border="1" align="center" cellpadding="4" cellspacing="4">
            <tr>
                <td width="150">Username</td>
                <td><input name="idUser" type="text" id="idUser"></td>
            </tr>
            <tr>
                <td width="150">Password</td>
                <td><input name="passUser" type="password" id="passUser"></td>
            </tr>
            <tr>
                <td width="150">&nbsp;</td>
                <td><input name="btnLogin" type="submit" id="btnLogin" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>