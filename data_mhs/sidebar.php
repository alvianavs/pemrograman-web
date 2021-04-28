<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Administrator Page</h3>
    </div>

    <ul class="list-unstyled components">
        <p class="text-center fw-bold">Menu utama</p>
        <li class="active">
            <a href="main_admin.php">Overview</a>
        </li>
        <li>
            <a href="profile_user.php">Profile user</a>
        </li>
        <li>
            <a href="#mhsSubmenu" data-bs-toggle="collapse" class="d-flex justify-content-between" aria-expanded="false">Data Mahasiswa
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 15px; height: auto;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <ul class="collapse list-unstyled" id="mhsSubmenu">
                <li>
                    <a href="#">Tambah data</a>
                </li>
                <li>
                    <a href="#">Tampilkan data</a>
                </li>
                <li>
                    <a href="#">Cari mahasiswa</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#tgsSubmenu" data-bs-toggle="collapse" class="d-flex justify-content-between" aria-expanded="false">Data Tugas
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 15px; height: auto;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <ul class="collapse list-unstyled" id="tgsSubmenu">
                <li>
                    <a href="#">Tambah data</a>
                </li>
                <li>
                    <a href="#">Tampilkan data</a>
                </li>
            </ul>
        </li>

        <hr>
        <li>
            <a href="logout.php">Logout</a>
        </li>
    </ul>

</nav>