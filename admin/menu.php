<?php
// Mendapatkan nilai 'aksi' dari URL
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'home';
?>

<ul class="sidebar-menu">
  <li class="<?php echo $aksi == 'home' ? 'active' : ''; ?>">
    <a href='index.php?aksi=home'><i class='fa fa-dashboard'></i> <span>Dashboard</span></a>
  </li>
  <li class="<?php echo $aksi == 'profil' ? 'active' : ''; ?>">
    <a href="index.php?aksi=profil"><i class="fa fa-briefcase"></i> <span>SETTING</span></a>
  </li>
  <li class='treeview <?php echo in_array($aksi, ['informasi', 'galeri', 'slide', 'halaman', 'poli', 'kritik', 'alumni', 'pegawai']) ? 'active' : ''; ?>'>
    <a href='#'>
      <i class='fa fa-bank'></i>
      <span>MASTER DATA</span>
    </a>
    <ul class='treeview-menu'>
      <li class="<?php echo $aksi == 'informasi' ? 'active' : ''; ?>">
        <a href='index.php?aksi=informasi'><i class='fa fa-arrows-h'></i>INFORMASI</a>
      </li>
      <li class="<?php echo $aksi == 'galeri' ? 'active' : ''; ?>">
        <a href='index.php?aksi=galeri'><i class='fa fa-arrows-h'></i>GALERY</a>
      </li>
      <li class="<?php echo $aksi == 'slide' ? 'active' : ''; ?>">
        <a href='index.php?aksi=slide'><i class='fa fa-arrows-h'></i>SLIDE</a>
      </li>
      <li class="<?php echo $aksi == 'halaman' ? 'active' : ''; ?>">
        <a href='index.php?aksi=halaman'><i class='fa fa-arrows-h'></i>HALAMAN</a>
      </li>
 <li class="<?php echo $aksi == 'poli' ? 'active' : ''; ?>">
        <a href='index.php?aksi=poli'><i class='fa fa-arrows-h'></i>POLI</a>
      </li>
      <li class="<?php echo $aksi == 'kritik' ? 'active' : ''; ?>">
        <a href='index.php?aksi=kritik'><i class='fa fa-arrows-h'></i>KRITIK</a>
      </li>
      <li class="<?php echo $aksi == 'alumni' ? 'active' : ''; ?>">
        <a href='index.php?aksi=alumni'><i class='fa fa-arrows-h'></i>TESTIMONI</a>
      </li>
      <li class="<?php echo $aksi == 'pegawai' ? 'active' : ''; ?>">
        <a href='index.php?aksi=pegawai'><i class='fa fa-arrows-h'></i>DOKTER</a>
      </li>
    </ul>
  </li>
  <li class="<?php echo $aksi == 'admin' ? 'active' : ''; ?>">
    <a href="index.php?aksi=admin"><i class="fa fa-users"></i> <span>ADMIN</span></a>
  </li>
  <li>
    <a href="logout.php"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a>
  </li>
</ul>
