<?php

///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='home'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE id_berita=$_GET[id_berita]");
$t=mysqli_fetch_array($tebaru);
    echo" <!-- Page Header Start -->
    <div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>$t[judul]</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>$t[judul]</li>
        </ol>    
    </div>
</div>
    
    <!-- Page Header End -->
    <div class='container-fluid py-5'>
    <div class='container'>
        <div class='row g-5'>
            <div class='col-lg-5 col-md-6 wow fadeIn' data-wow-delay='0.1s' style='min-height: 400px;'>
                <div class='position-relative h-100'>
                    <img class='position-absolute w-100 h-100' src='foto/data/$t[gambar]' style='object-fit: cover;'>
                </div>
            </div>
            <div class='col-lg-7 col-md-6 wow fadeIn' data-wow-delay='0.5s'>
                <div class='section-header text-start pb-4'>
                    <h6 class='bg-white px-2 fw-semi-bold text-uppercase text-primary'>$k_k[nama]</h6>
                    <h1 class='display-5'>$t[judul]</h1>
                </div>
                $t[isi]
            </div>
        </div>
    </div>
</div>
    ";
}
elseif($_GET['aksi']=='informasi'){   
echo"<!-- Header Start -->
<div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Informasi</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>Berita</li>
        </ol>    
    </div>
</div>

<div class='container-fluid py-5'>
<div class='container'>
    <div class='row g-5'>
        <div class='col-lg-8'>
            <div class='row g-3'>";
            $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='informasi' ORDER BY id_berita DESC LIMIT 4");              
while ($t=mysqli_fetch_array($tebaru)){
                echo"               
                <div class='col-md-6 wow fadeIn' data-wow-delay='0.1s'>
                    <div class='blog-item bg-light position-relative'>
                        <a href class='position-absolute top-0 start-0 m-4 py-1 px-3 bg-primary text-dark fw-medium' style='z-index: 1;'>$t[jenis]</a>
                        <div class='overflow-hidden'>
                            <img class='img-fluid' src='foto/data/$t[gambar]' alt='Image'>
                        </div>
                        <div class='p-4'>
                            <div class='d-flex justify-content-between mb-3'>
                                <div class='d-flex align-items-center'>
                                <span class='fa fa-comments text-primary'></span>$t[dilihat]
                                   
                                </div>
                                <div class='d-flex align-items-center'>
                                    <small class='ms-3'><i class='far fa-calendar-alt text-primary me-2'></i>$t[tanggal]</small>
                                </div>
                            </div>
                            <h5 class='fw-semi-bold lh-base mb-3'>$t[judul]</h5>
                            <a href='berita-$t[id_sesi]-$t[id_berita]' class='btn btn-primary rounded-pill text-white py-2 px-4 mb-1' href>Read More <i class='bi bi-arrow-right'></i></a>
                        </div>
                    </div>
                </div>";
}
                echo"
                <!-- More blog items -->
            </div>
        </div>";
        include"kanan.php"; 
echo"
<!-- paginasi 
        <div class='col-12 wow fadeIn' data-wow-delay='0.1s'>
            <nav aria-label='Page navigation'>
                <ul class='pagination pagination-lg m-0'>
                    <li class='page-item disabled'>
                        <a class='page-link rounded-0' href='#' aria-label='Previous'>
                            <span aria-hidden='true'><i class='bi bi-arrow-left'></i></span>
                        </a>
                    </li>
                    <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a></li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                    <li class='page-item'>
                        <a class='page-link rounded-0' href='#' aria-label='Next'>
                            <span aria-hidden='true'><i class='bi bi-arrow-right'></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div>
</div>
</div>
";
}

elseif($_GET['aksi']=='detailberita'){  
// Terima id_berita dan id_sesi dari URL
$id_berita = isset($_GET['id_berita']) ? $_GET['id_berita'] : null;
$id_sesi = isset($_GET['id_sesi']) ? $_GET['id_sesi'] : null;
// Validasi id_sesi
if ($id_sesi !== null) {
    // Sanitasi nilai id_sesi
    $id_sesi = mysqli_real_escape_string($koneksi, $id_sesi);
    // Kueri untuk mendapatkan berita berdasarkan id_berita
    $query = "SELECT * FROM berita WHERE id_berita = '$id_berita' AND id_sesi = '$id_sesi'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Periksa apakah ada berita yang ditemukan
        if (mysqli_num_rows($result) > 0) {
            // Tampilkan berita
        // Tampilkan berita
      $t = mysqli_fetch_assoc($result);
    echo"<!-- Page Header Start -->
<div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Detail Informasi</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>informasi</li>
        </ol>    
    </div>
</div>
    
    <!-- Page Header End -->
    <div class='container-fluid py-5'>
    <div class='container'>
        <div class='row g-5'>
            <div class='col-lg-8'>";
            $gambarPath = "foto/data/$t[gambar]";

// Periksa apakah gambar tersedia
if (file_exists($gambarPath)) {
    echo "<img class='img-fluid w-100 mb-5' src='$gambarPath' alt=''>";
} else {
    echo "";
} echo"
            <h1 class='mb-4'>$t[judul]</h1>
           $t[isi]
            </div>";
            include"kanan.php";        
           
      echo"  </div>
    </div>
    </div>
    ";
    $id_sesi = bin2hex(random_bytes(16));
    mysqli_query($koneksi,"UPDATE berita SET id_sesi='$id_sesi' WHERE id_berita='$id_berita]'"); 
    $update_query = "UPDATE berita SET dilihat = dilihat + 1 WHERE id_berita = '$id_berita'";
    mysqli_query($koneksi, $update_query); 
} else {
    include"404.php";
}
} else {
    include"404.php";
}
} else {
include"404.php";
}
}
elseif($_GET['aksi']=='hubungi'){  
echo"<!-- Page Header Start -->
<div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Kontak Kami</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>Informasi Kontak Kami</li>
        </ol>    
    </div>
</div>
<!-- Page Header End --><!-- Contact Start -->
<div class='container-xxl py-5'>
    <div class='container'>
        <div class='row g-5 justify-content-center mb-5'>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-phone-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Nomor Telpone</h4>
                    <p class='mb-2'>$k_k[tahun]</p>
                    <a class='btn btn-primary px-4' href='tel:$k_k[tahun]'>Call Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.3s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-envelope-open fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Email Address</h4>
                    <p class='mb-4'>$k_k[alias]</p>
                    <a class='btn btn-primary px-4' href='$k_k[alias]'>Email Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.5s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-map-marker-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Alamat Kantor</h4>
                    <p class='mb-2'>$k_k[alamat]</p>
                    <a class='btn btn-primary px-4' href='https://maps.app.goo.gl/F8bcqyEfFqtzXWPt9' target='blank'>Direction <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
        </div>
        <div class='row mb-5'>
            <div class='col-12 wow fadeInUp' data-wow-delay='0.1s'>
                <iframe class='w-100'
                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7946.406122965735!2d104.96140139123648!3d-5.230767978988103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e473592f8e6b607%3A0xfceb58b9af2bb24a!2sRSU%20Kartini%20Kalirejo!5e0!3m2!1sid!2sid!4v1716535136907!5m2!1sid!2sid'
                frameborder='0' style='min-height: 450px; border:0;' allowfullscreen='' aria-hidden='false'
                tabindex='0'></iframe>
            </div>
        </div>
        <div class='row g-5'>
            <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.1s'>
                <p class='fw-medium text-uppercase text-primary mb-2'>Kontak Kami</p>
                <h1 class='display-5 mb-4'>Jika ada butuh informasi silahkan tinggalkan pesan di samping</h1>
                <p class='mb-4'>Informasi Konta Kami merupakan informasi untuk kritik dan saran atau untuk meninggalkan pesan terhadap admin website kami</p>
                <div class='row g-4'>
                    <div class='col-6'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0 btn-square bg-primary rounded-circle'>
                                <i class='fa fa-phone-alt text-white'></i>
                            </div>
                            <div class='ms-3'>
                                <h6>Hubungi Kami</h6>
                                <span>$k_k[tahun]</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0 btn-square bg-primary rounded-circle'>
                                <i class='fa fa-envelope text-white'></i>
                            </div>
                            <div class='ms-3'>
                                <h6>Email Kami</h6>
                                <span>$k_k[alias]</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.5s'>
                <form method='post' action='utama.php?aksi=inputhubungi'>
                    <div class='row g-3'>
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='nama' placeholder='Nama Anda'>
                                <label for='name'>Nama Lengkap</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <input type='email' class='form-control' name='email' placeholder='Email anda'>
                                <label for='email'>Email</label>
                            </div>
                        </div>
                        <div class='col-12'>
                            <div class='form-floating'>
                                <textarea class='form-control' placeholder='Isikan Pesan' name='pesan' style='height: 150px'></textarea>
                                <label for='message'>Pesan</label>
                            </div>
                        </div>
                        <div class='col-12'>
                             <button type='submit' class='btn btn-primary py-3 px-5' >Kirim Pesan </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
}
elseif($_GET['aksi']=='inputhubungi'){ 
    mysqli_query($koneksi,"insert into kritik (nama,email,pesan) values ('$_POST[nama]','$_POST[email]','$_POST[pesan]')");  
    echo "<script>window.alert('terimakasih telah meninggalkan pesan di sini');
    window.location=('index.php')</script>";
}
elseif($_GET['aksi']=='galeri'){
echo"<!-- Page Header Start -->
<div class='container-fluid bg-breadcrumb'>
    <div class='container text-center py-5' style='max-width: 900px;'>
        <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Galeri</h1>
        <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
        <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
        <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
        <li class='breadcrumb-item active' aria-current='page'>Galeri Kami</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->
<!-- Projects Start -->
    <div class='container-xxl py-5'>
        <div class='container'>
            <div class='text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
                <p class='fs-5 fw-bold text-primary'>Galeri</p>
                <h1 class='display-5 mb-5'>Galeri Podok Pesantren Kami</h1>
            </div>
           
            <div class='row g-4 portfolio-container'> ";
            $tebaru=mysqli_query($koneksi," SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 4");              
        while ($t=mysqli_fetch_array($tebaru)){
                
                echo"
            <div class='col-lg-4 col-md-6 portfolio-item first wow fadeInUp' data-wow-delay='0.1s'>
                    <div class='portfolio-inner rounded'>
                        <img class='img-fluid' src='foto/galleri/$t[gambar]' alt=''>
                        <div class='portfolio-text'>
                            <h4 class='text-white mb-4'>$t[judul]</h4>
                            <div class='d-flex'>
                                <a class='btn btn-lg-square rounded-circle mx-2' href='foto/galleri/$t[gambar]' data-lightbox='portfolio'><i class='fa fa-eye'></i></a>
                                <a class='btn btn-lg-square rounded-circle mx-2' href=''><i class='fa fa-link'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
              echo"
            </div>
        </div>
    </div>
    <!-- Projects End -->
";

}
elseif($_GET['aksi']=='dokterkami'){
    echo"<!-- Page Header Start -->
    <div class='container-fluid bg-breadcrumb'>
        <div class='container text-center py-5' style='max-width: 900px;'>
            <h3 class='text-white display-3 mb-4 wow fadeInDown' data-wow-delay='0.1s'>Galeri</h1>
            <ol class='breadcrumb justify-content-center mb-0 wow fadeInDown' data-wow-delay='0.3s'>
            <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
            <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
            <li class='breadcrumb-item active' aria-current='page'>Galeri Kami</li>
            </ol>    
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Projects Start -->
    <div class='container-fluid team py-5'>
    <div class='container py-5'>
        <div class='section-title mb-5 wow fadeInUp' data-wow-delay='0.1s'>
            <div class='sub-style'>
                <h4 class='sub-title px-3 mb-0'>Dokter Kami</h4>
            </div>
            <h1 class='display-3 mb-4'>Dokter Kami siap Membantu Anda</h1>
          <p class='mb-0'>Kami Memberikan Pelayanan Terbaik, bukan paling baik</p> 
        </div>
        <div class='row g-4 justify-content-center'>";
        $tebaru=mysqli_query($koneksi," SELECT * FROM pegawai ORDER BY id_pegawai DESC ");
               while ($t=mysqli_fetch_array($tebaru)){	
                echo" <div class='col-md-6 col-lg-6 col-xl-3 wow fadeInUp' data-wow-delay='0.1s'>
                <div class='team-item rounded'>
                    <div class='team-img rounded-top h-100'>
                        <img src='foto/pegawai/$t[gambar]' class='img-fluid rounded-top w-100' alt=''>
                        <div class='team-icon d-flex justify-content-center'>
                            <a class='btn btn-square btn-primary text-white rounded-circle mx-1' href=''><i class='fab fa-facebook-f'></i></a>
                            <a class='btn btn-square btn-primary text-white rounded-circle mx-1' href=''><i class='fab fa-twitter'></i></a>
                            <a class='btn btn-square btn-primary text-white rounded-circle mx-1' href=''><i class='fab fa-instagram'></i></a>
                            <a class='btn btn-square btn-primary text-white rounded-circle mx-1' href=''><i class='fab fa-youtube'></i></a>
                        </div>
                    </div>
                    <div class='team-content text-center border border-primary border-top-0 rounded-bottom p-4'>
                        <h5>$t[nama]</h5>
                        <p class='mb-0'>$t[keterangan]</p>
                    </div>
                </div>
            </div>
            ";
        }
          echo"
        </div>
    </div>
</div>
        <!-- Projects End -->
    ";
    
    }
?>

