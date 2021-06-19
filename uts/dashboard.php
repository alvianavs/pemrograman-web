<?php
include 'header.php';
include 'navbar.php';
?>
<div class="container my-4 rounded">
    <br>
    <h1 class="text-dark text-center">Selamat datang<br>
        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 35px; height: auto;" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
        </svg>
        Sistem Informasi Perpustakaan
        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 35px; height: auto;" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
        </svg>
    </h1>
    <br>
    <div class="border border-2 border-primary"></div>
    <h3 class="my-3 text-dark text-center">Menu Utama</h3>
    
    <div class="row mb-3">
        <div class="col d-flex justify-content-center">
            <div class="card shadow" style="width: 17rem;">
                <div class="mt-3 d-flex justify-content-center">
                    <div class="d-flex justify-content-center rounded-circle bg-primary" style="width: 100px; height:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="py-3 text-white" style="width: 60px; height:auto;" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">DATA ANGGOTA</h5>
                    <p class="card-text">Mengelola data - data anggota</p>
                    <a href="anggota/main.php" class="btn btn-sm btn-success">Ke Halaman</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card shadow" style="width: 17rem;">
                <div class="mt-3 d-flex justify-content-center">
                    <div class="d-flex justify-content-center rounded-circle bg-primary" style="width: 100px; height:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="py-3 text-white" style="width: 60px; height: auto;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">DATA PEMINJAMAN</h5>
                    <p class="card-text">Mengelola data peminjaman buku oleh anggota</p>
                    <a href="pinjam/main.php" class="btn btn-sm btn-success">Ke Halaman</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card shadow" style="width: 17rem;">
                <div class="mt-3 d-flex justify-content-center">
                    <div class="d-flex justify-content-center rounded-circle bg-primary" style="width: 100px; height:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="py-3 text-white" style="width: 60px; height: auto;" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                        </svg>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">DATA BUKU</h5>
                    <p class="card-text">Mengelola data - data buku</p>
                    <a href="buku/main.php" class="btn btn-sm btn-success">Ke Halaman</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>