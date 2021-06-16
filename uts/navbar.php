<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="/pemrograman-web/uts/dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" style="width: 25px; height: auto;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            SI Perpus
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mx-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/pemrograman-web/uts/dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Management Data
                    </a>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbaDropdownMenuLink">
                        <li><a class="dropdown-item" href="/pemrograman-web/uts/anggota/main.php">Data anggota</a></li>
                        <li><a class="dropdown-item" href="/pemrograman-web/uts/buku/main.php">Data buku</a></li>
                        <li><a class="dropdown-item" href="/pemrograman-web/uts/pinjam/main.php">Data peminjaman</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/pemrograman-web/uts/user/profile.php">Profile</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['is_login']))
                echo "<a href='/pemrograman-web/uts/logout.php' class='nav-link text-white'>Logout</a>";
            else
                echo "<a href='/pemrograman-web/uts/index.php' class='nav-link text-white'>Login</a>";
            ?>

        </div>
    </div>
</nav>