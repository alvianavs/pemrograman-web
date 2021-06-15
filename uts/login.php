<?php
include 'header.php';
include 'navbar.php';
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
        <div class="col-md-4 p-4 border border-2 rounded bg-white">
            <form action="POST" action="">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username.." required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password.." required>
                </div>
                <a href="">belum punya akun?</a>
                <button class="btn btn-primary float-end" type="submit">
                    Login
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
            <a href="<?= $fb_login_url ?>" class="btn btn-primary">
                <img src="img/fb-ico-removebg-preview.png" style="width: 33px;">
                Masuk dengan <b>Facebook</b></a>
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

<?php
include 'footer.php';
?>