<?php $current_url = $_SERVER['REQUEST_URI']; ?>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href='https://maps.app.goo.gl/F8bcqyEfFqtzXWPt9' target='blank' class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i><?php echo"$k_k[tahun]";?></a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i><?php echo"$k_k[alias]";?></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/p/Rsu-Kartini-100064277072649/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/rsu_kartini/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@rsukartinikalirejolampung8211" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="foto/logo.png" alt="Logo" style="width: 60px;"> <?php echo"$k_k[nama_app]";?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Kami</a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php#tentang" class="dropdown-item">Tentang Kami</a>
                                <?php   $tebaru=mysqli_query($koneksi," SELECT * FROM berita where jenis='halaman' ORDER BY id_berita DESC");
                       while ($t=mysqli_fetch_array($tebaru)){	?>
                                <a href="berita-<?php echo"$t[id_sesi]";?>-<?php echo"$t[id_berita]";?>" class="dropdown-item"><?php echo"$t[judul]";?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="index.php#informasi" class="nav-item nav-link">Berita</a>
                        <a href="index.php#dokter" class="nav-item nav-link">Dokter Kami</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php#poli" class="dropdown-item">Poli Klinik</a>
                                <a href="Jadwal.php" class="dropdown-item">Jadwal Dokter</a>
                                <a href="kamar.php" class="dropdown-item">Informasi Kamar</a>
                                <a href="halaman-informasi" class="dropdown-item">Berita</a>
                            </div>
                        </div>
                        <a href="halaman-hubungi" class="nav-item nav-link">Hubungi</a>
                    </div>
                    <a href="Jadwal.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Buat Janji</a>
                </div>
            </nav>