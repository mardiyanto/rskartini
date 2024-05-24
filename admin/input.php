<?php
  include '../koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  if($_SESSION['status'] != "administrator_logedin"){
    header("location:../login.php?alert=belum_login");
  }
  $date=date ('d/m/Y');
$time=date ('h:i A');
///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='inputartikel'){
	$id_sesi = bin2hex(random_bytes(16)); 
	if (empty($_POST['jd']) || empty($_POST['isi'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			mysqli_query($koneksi, "INSERT INTO berita (id_sesi,judul, tanggal, isi, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', 'informasi')");
	
			echo "<script>
					window.location=('index.php?aksi=informasi');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/data/" . $tanggal . ".jpg";
			if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
				mysqli_query($koneksi, "INSERT INTO berita (id_sesi,judul, tanggal, isi, gambar, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', '$tanggal.jpg', 'informasi')");
	
				echo "<script>
						window.location=('index.php?aksi=informasi');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputhalaman'){
	$id_sesi = bin2hex(random_bytes(16)); 
	if (empty($_POST['jd']) || empty($_POST['isi'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			mysqli_query($koneksi, "INSERT INTO berita (id_sesi, judul, tanggal, isi, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', 'halaman')");
	
			echo "<script>
					window.location=('index.php?aksi=halaman');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/data/" . $tanggal . ".jpg";
			if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
				mysqli_query($koneksi, "INSERT INTO berita (id_sesi,judul, tanggal, isi, gambar, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', '$tanggal.jpg', 'halaman')");
	
				echo "<script>
						window.location=('index.php?aksi=halaman');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputpoli'){
	$id_sesi = bin2hex(random_bytes(16)); 
	if (empty($_POST['jd']) || empty($_POST['isi'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			mysqli_query($koneksi, "INSERT INTO berita (id_sesi,judul, tanggal, isi, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', 'poli')");
	
			echo "<script>
					window.location=('index.php?aksi=poli');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/data/" . $tanggal . ".jpg";
			if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
				mysqli_query($koneksi, "INSERT INTO berita (id_sesi,judul, tanggal, isi, gambar, jenis) VALUES ('$id_sesi','$_POST[jd]', '$date', '$_POST[isi]', '$tanggal.jpg', 'poli')");
	
				echo "<script>
						window.location=('index.php?aksi=poli');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputgaleri'){
	if (empty($_POST['jd']) || empty($_POST['isi'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			echo "<script>
					window.alert('File gambar masih kosong');
					window.location=('javascript:history.go(-1)');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file = $_FILES['gambar']['tmp_name'];
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/galeri/" . $tanggal . ".jpg";
			if (move_uploaded_file($file, $target_file)) {
				mysqli_query($koneksi, "INSERT INTO galeri (judul, keterangan, gambar, jenis) VALUES ('{$_POST['jd']}', '{$_POST['isi']}', '$tanggal.jpg', 'galeri')");
				echo "<script>
						window.location=('index.php?aksi=galeri');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputslide'){
	if (empty($_POST['jd']) || empty($_POST['isi'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			echo "<script>
					window.alert('File gambar masih kosong');
					window.location=('javascript:history.go(-1)');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file = $_FILES['gambar']['tmp_name'];
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/galeri/" . $tanggal . ".jpg";
			if (move_uploaded_file($file, $target_file)) {
				mysqli_query($koneksi, "INSERT INTO galeri (judul, keterangan, gambar, jenis) VALUES ('$_POST[jd]', '$_POST[isi]', '$tanggal.jpg', 'slide')");
				echo "<script>
						window.location=('index.php?aksi=slide');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputalumni'){
	if (empty($_POST['nama']) || empty($_POST['pekerjaan'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			echo "<script>
					window.alert('File gambar masih kosong');
					window.location=('javascript:history.go(-1)');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file = $_FILES['gambar']['tmp_name'];
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/alumni/" . $tanggal . ".jpg";
			if (move_uploaded_file($file, $target_file)) {
				$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
				mysqli_query($koneksi, "INSERT INTO alumni (nama, pekerjaan, keterangan, gambar) VALUES ('{$_POST['nama']}', '{$_POST['pekerjaan']}', '{$keterangan}', '$tanggal.jpg')");
				echo "<script>
						window.location=('index.php?aksi=alumni');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
elseif($_GET['aksi']=='inputpegawai'){
	if (empty($_POST['nama']) || empty($_POST['keterangan'])) {
		echo "<script>
				window.alert('Data yang Anda isikan belum lengkap');
				window.location=('javascript:history.go(-1)');
			  </script>";
	} else {
		$lokasi_file = $_FILES['gambar']['tmp_name'];
		if (empty($lokasi_file)) {
			echo "<script>
					window.alert('File gambar masih kosong');
					window.location=('javascript:history.go(-1)');
				  </script>";
		} else {
			$tanggal = date("dmYhis");
			$file = $_FILES['gambar']['tmp_name'];
			$file_name = $_FILES['gambar']['name'];
			$target_file = "../foto/pegawai/" . $tanggal . ".jpg";
			if (move_uploaded_file($file, $target_file)) {
				mysqli_query($koneksi, "INSERT INTO pegawai (nama, keterangan, gambar) VALUES ('{$_POST['nama']}', '{$_POST['keterangan']}', '$tanggal.jpg')");
				echo "<script>
						window.location=('index.php?aksi=pegawai');
					  </script>";
			} else {
				echo "<script>
						window.alert('Gagal mengunggah gambar');
						window.location=('javascript:history.go(-1)');
					  </script>";
			}
		}
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////
elseif($_GET['aksi']=='inputmenu'){
	mysqli_query($koneksi,"insert into menu (nama_menu,link,link_b,status,icon_menu,aktif) values ('$_POST[nama_menu]','$_POST[link]','$_POST[link_b]','$_POST[status]','$_POST[icon_menu]','$_POST[aktif]')");  
echo "<script>window.location=('index.php?aksi=menu')</script>";
}
elseif($_GET['aksi']=='inputsubmenu'){
	mysqli_query($koneksi,"insert into submenu (id_menu,nama_sub,link_sub,icon_sub) values ('$_POST[id_menu]','$_POST[nama_sub]','$_POST[link_sub]','$_POST[icon_sub]')");  
echo "<script>window.location=('index.php?aksi=submenu')</script>";
}
elseif($_GET['aksi']=='inputgolongan'){
	mysqli_query($koneksi,"insert into golongan (nama_gol) values ('$_POST[nama_gol]')");  
echo "<script>window.location=('index.php?aksi=golongan')</script>";
}
elseif($_GET['aksi']=='inputjabatan'){
	mysqli_query($koneksi,"insert into jabatan (nama_jabatan) values ('$_POST[nama_jabatan]')");  
echo "<script>window.location=('index.php?aksi=jabatan')</script>";
}
elseif($_GET['aksi']=='inputprofesi'){
	mysqli_query($koneksi,"insert into profesi (nama_profesi) values ('$_POST[nama_profesi]')");  
echo "<script>window.location=('index.php?aksi=profesi')</script>";
}
elseif($_GET['aksi']=='inputadmin'){
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','')");
	echo "<script>window.location=('index.php?aksi=admin')</script>";
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		echo "<script>alert('Gagal ');</script>";
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','$file_gambar')");
		echo "<script>window.location=('index.php?aksi=admin')</script>";
	}
}
}

elseif($_GET['aksi']=='inputkeluarga'){
	mysqli_query($koneksi,"insert into keluarga (id_pegawai,nama_keluarga,jk_keluarga,tempatlahir_keluarga,tgllahir_keluarga,status_keluarga,pekejaan_keluarga,pendidikan_keluarga,penghasilan_keluarga,ket_keluarga,tunjang_status,tgl_mati,status_nikah,status_beasiswa,anak_angkat_status,status_sekolah,status_aktif) 
	values ('$_POST[id_pegawai]','$_POST[nama_keluarga]','$_POST[jk_keluarga]','$_POST[tempatlahir_keluarga]','$_POST[tgllahir_keluarga]','$_POST[status_keluarga]','$_POST[pekejaan_keluarga]','$_POST[pendidikan_keluarga]','$_POST[penghasilan_keluarga]','$_POST[ket_keluarga]','$_POST[tunjang_status]','$_POST[tgl_mati]','$_POST[status_nikah]','$_POST[status_beasiswa]','$_POST[anak_angkat_status]','$_POST[status_sekolah]','$_POST[status_aktif]')");  
	mysqli_query($koneksi,"UPDATE pegawai SET status_pg='ada' WHERE id_pegawai='$_POST[id_pegawai]'");
	echo "<script>window.location=('index.php?aksi=listtunjangan&id_pegawai=$_POST[id_pegawai]')</script>";
}
elseif($_GET['aksi']=='inputtunjangan'){
	mysqli_query($koneksi,"insert into tunjangan (id_pegawai,t_status) 
	values ('$_GET[id_pegawai]','baru')");
	mysqli_query($koneksi,"UPDATE pegawai SET status_pg='kk ada' WHERE id_pegawai='$_GET[id_pegawai]'"); 
echo "<script>window.location=('index.php?aksi=tunjangan')</script>";
}
elseif($_GET['aksi']=='inputpangku'){
	mysqli_query($koneksi,"insert into pemangku (nama_pkjab) 
	values ('$_POST[nama_pkjab]')");
echo "<script>window.location=('index.php?aksi=pangku')</script>";
}
elseif($_GET['aksi']=='inputpangkujabatan'){
	mysqli_query($koneksi,"insert into pemangkujabatan (id_pegawai,id_pkjab,nomor_surat,tanggal_surat) 
	values ('$_POST[id_pegawai]','$_POST[id_pkjab]','$_POST[nomor_surat]','$_POST[tanggal_surat]')");
echo "<script>window.location=('index.php?aksi=pangkujabatan')</script>";
}
?>