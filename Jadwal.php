<!DOCTYPE html>
<html lang="en">
<?php include 'config.php';?>
<?php include 'koneksi.php';?>
<head>
    <meta charset="utf-8">
    <title><?php echo"$k_k[nama]";?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="tema/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="tema/lib/animate/animate.min.css" rel="stylesheet">
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="tema/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php include "menu.php" ?>

    <!-- About Start -->
   <!-- Page Header Start -->
<div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Jadwal Praktek Dokter Kami</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>Informasi Jadwal Prakter Dokter</li>
        </ol>    
    </div>
</div>
<!-- Page Header End --><!-- Contact Start -->
<div class='container-xxl py-5'>
    <div class='container'>

        <div class='row mb-5'>
            <div class='col-12 wow fadeInUp' data-wow-delay='0.1s'>
            <h2 class="mb-4"> JADWAL DOKTER HARI INI
                                <small><?php echo $dayList[$day].", ".date('d')." ".$bulanList[$bulan]." ".date('Y'); ?></small></h2>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Poliklinik</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">kuota</th>
            </tr>
        </thead>
        <tbody class="table-striped">
        <?php
        $sql = query("SELECT poliklinik.nm_poli, dokter.nm_dokter, jadwal.kuota, DATE_FORMAT(jadwal.jam_mulai, '%H:%i') AS jam_mulai, DATE_FORMAT(jadwal.jam_selesai, '%H:%i') AS jam_selesai FROM jadwal INNER JOIN dokter INNER JOIN poliklinik ON dokter.kd_dokter = jadwal.kd_dokter AND jadwal.kd_poli = poliklinik.kd_poli WHERE jadwal.hari_kerja = '$namahari' ORDER BY poliklinik.nm_poli ASC");
        $no = 1;
        while ($row = fetch_array($sql)) {
        ?>
            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $row['nm_poli']; ?></td>
                <td><?php echo $row['nm_dokter']; ?></td>
                <td><?php echo $row['jam_mulai']; ?></td>
                <td><?php echo $row['jam_selesai']; ?></td>
                <td><?php echo $row['kuota']; ?></td>
            </tr>
        <?php 
            $no++;
        } 
        ?>
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills flex-column">
                <?php
                $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                foreach ($hari as $index => $namahari) {
                    $activeClass = $index === 0 ? 'active' : '';
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link $activeClass' data-bs-toggle='pill' href='#" . strtolower($namahari) . "'>$namahari</a>";
                    echo "</li>";
                }
                ?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <?php
                foreach ($hari as $index => $namahari) {
                    $activeClass = $index === 0 ? 'show active' : '';
                ?>
                    <div class="tab-pane fade <?php echo $activeClass; ?>" id="<?php echo strtolower($namahari); ?>" role="tabpanel">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Poliklinik</th>
                                    <th scope="col">Nama Dokter</th>
                                    <th scope="col">Mulai</th>
                                    <th scope="col">Selesai</th>
                                    <th scope="col">Kuota</th>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                            <?php
                            $sql = query("SELECT poliklinik.nm_poli, dokter.nm_dokter, jadwal.kuota, DATE_FORMAT(jadwal.jam_mulai, '%H:%i') AS jam_mulai, DATE_FORMAT(jadwal.jam_selesai, '%H:%i') AS jam_selesai FROM jadwal INNER JOIN dokter INNER JOIN poliklinik ON dokter.kd_dokter = jadwal.kd_dokter AND jadwal.kd_poli = poliklinik.kd_poli WHERE jadwal.hari_kerja = '$namahari' ORDER BY poliklinik.nm_poli ASC");
                            $no = 1;
                            while ($row = fetch_array($sql)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $row['nm_poli']; ?></td>
                                    <td><?php echo $row['nm_dokter']; ?></td>
                                    <td><?php echo $row['jam_mulai']; ?></td>
                                    <td><?php echo $row['jam_selesai']; ?></td>
                                    <td><?php echo $row['kuota']; ?></td>
                                </tr>
                            <?php 
                                $no++;
                            } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
            </div>
        </div>
        <div class='row g-5 justify-content-center mb-5'>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-phone-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Nomor Telpone</h4>
                    <p class='mb-2'><?php echo" $k_k[tahun]"; ?></p>
                    <a class='btn btn-primary px-4' href='tel:<?php echo" $k_k[tahun]"; ?>'>Call Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.3s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-envelope-open fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Email Address</h4>
                    <p class='mb-4'><?php echo" $k_k[alias]"; ?></p>
                    <a class='btn btn-primary px-4' href='<?php echo" $k_k[alias]"; ?>'>Email Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.5s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-map-marker-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Office Address</h4>
                    <p class='mb-2'><?php echo "$k_k[alamat]"; ?></p>
                    <a class='btn btn-primary px-4' href='https://maps.app.goo.gl/F8bcqyEfFqtzXWPt9' target='blank'>Direction <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- About End -->
        
    <?php include "bawah.php" ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="tema/lib/wow/wow.min.js"></script>
    <script src="tema/lib/easing/easing.min.js"></script>
    <script src="tema/lib/waypoints/waypoints.min.js"></script>
    <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="tema/lib/counterup/counterup.min.js"></script>
    <script src="tema/lib/parallax/parallax.min.js"></script>
    <script src="tema/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="tema/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="tema/js/main.js"></script>
</body>

</html>