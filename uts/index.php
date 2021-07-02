<?php
include 'header.php';
include 'navbar.php';

require_once 'fb_init.php';

$quotes = [
    'Some books leave us free and some books make us free.',
    'The book you don’t read won’t help.',
    'A book is a gift you can open again and again.',
    'Great books help you understand, and they help you feel understood.',
    'Good books don’t give up all their secrets at once.',
    'Books are the ever-burning lamps of accumulated wisdom.'
];
$author = [
    'Ralph Waldo Emerson',
    'Jim Rohn',
    'Garrison Keillor',
    'John Green',
    'Stephen King',
    'George William Curtis'
];
?>
<div class="container my-5">
    <h2 class="mb-4">Halaman Masuk</h2>
    <div class="row">
        <div class="col-md-4 p-4 border border-2 rounded bg-white shadow">
            <?php
            if (isset($_SESSION['pesan'])) { ?>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p><?= $_SESSION['pesan']; ?></p>
                </div>
                <?php
                unset($_SESSION['pesan']);
            }
            if (isset($_SESSION['pesan_error'])) { ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    <div class="mx-2">
                        <?= $_SESSION['pesan_error']; ?>
                    </div>
                </div>
                <?php
                unset($_SESSION['pesan_error']);
            }
            ?>
            <form action="user/login.php" method="POST" id="form-login" class="">
                <h4 class="text-center my-0">Form Login</h4>
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Input username.." required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Input password.." required>
                </div>
                <a href="#" onclick="switchForm()">belum punya akun?</a>
                <button class="btn btn-primary float-end" type="submit" name="submit">
                    Login
                </button>
            </form>

            <form action="user/register.php" method="POST" id="form-register" class="visually-hidden">
                <h4 class="text-center">Form Pendaftaran</h4>
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                </div>
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-sm" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                </div>
                <a href="#" onclick="switchForm()">sudah punya akun?</a>
                <button class="btn btn-primary float-end" type="submit" name="submit">
                    Daftar
                </button>
            </form>
        </div>
        <div class="col">
            <img src="img/edu-logo.png" alt="" class="float-end">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <p class="mt-3 mb-1">atau lewat lain</p>
            <hr class="mt-0">
            <a href="<?= $fb_login_url ?>" class="btn btn-primary col-md-9 shadow">
                <img src="img/fb-ico-removebg-preview.png" style="width: 33px;">
                Masuk dengan <b>Facebook</b></a>
                <a href="https://accounts.google.com/o/oauth2/v2/auth?client_id=423104871324-rokljr4nev5mrd1g3fm24hpqcqiq1eov.apps.googleusercontent.com&redirect_uri=http://localhost/pemrograman-web/uts/google-auth.php&scope=profile email openid&response_type=code&access_type=offline&include_granted_scopes=true" class="btn btn-light mt-3 col-md-9 shadow">
                    <img src="img/google-removebg-preview.png" style="width: 33px;">
                    Masuk dengan <b class="text-primary">Google</b></a>

                </div>
                <div class="col-md">
                    <div class="col-md-6 mt-3 float-end">
                        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $i = 0;
                                while ($i < count($quotes)) { ?>
                                    <div class="carousel-item <?php echo ($i == 0) ? "active" : "" ?>">
                                        <figure class="text-center fw-bold">
                                            <blockquote class="blockquote">
                                                <q><?= $quotes[$i] ?></q>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                <?= $author[$i] ?>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>

                            <button class="position-absolute carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="visually-hidden carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="position-absolute carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="visually-hidden carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function switchForm() {
                var formLogin = document.getElementById("form-login");
                var formDaftar = document.getElementById("form-register");

                if (formLogin.className !== "visually-hidden") {
                    formLogin.classList.add("visually-hidden");
                    formDaftar.classList.remove("visually-hidden");
                } else {
                    formLogin.classList.remove("visually-hidden");
                    formDaftar.classList.add("visually-hidden");
                }
            }
        </script>
        <?php
        include 'footer.php';
    ?>