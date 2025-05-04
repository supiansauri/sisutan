<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda Admin - BPS Kota Sukabumi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: Arial, sans-serif; display: flex; min-height: 100vh; overflow-x: hidden; }
    .sidebar { width: 250px; background-color: #28264A; color: white; transition: margin-left 0.3s ease; }
    .sidebar.hidden { margin-left: -250px; }
    .sidebar ul { list-style: none; padding: 1rem; font-size: 12px; }
    .sidebar ul li { padding: 5px 0; cursor: pointer; }
    .sidebar ul li a, .sidebar ul li span { color: white; text-decoration: none; display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; transition: background-color 0.3s ease; }
    .sidebar ul li a:hover, .sidebar ul li span:hover { background-color: #3b3960; }
    .sidebar ul li a:active, .sidebar ul li span:active { background-color: #50507e; }
    .sidebar ul li a.active, .sidebar ul li span.active { background-color: #1C1B34; }
    .submenu { display: none; padding-left: 20px; }
    .submenu.active { display: block; margin-bottom: -20px; margin-left: 14px; }
    .content { flex-grow: 1; background-color: #f5f5f5; transition: margin-left 0.3s ease; }
    .navbar { background-color: white; color: black; padding: 10px 20px; display: flex; align-items: center; border-bottom: 1px solid #ddd; }
    .toggle-btn { font-size: 24px; cursor: pointer; margin-right: 20px; }
    .logo-area { display: flex; align-items: center; margin-bottom: 20px; }
    .logo-area img { height: 40px; margin-right: 15px; }
    .logo-area h1 { font-size: 12px; line-height: 1.2; }
    .max-icon { max-width: 20px; }
    .drop-icon { max-width: 10px; margin-left: auto; }
  </style>
</head>
<body>
  <div class="sidebar" id="sidebar">
    <ul>
      <div class="logo-area">
        <img src="../../asset/img/logo_bps.png" alt="Logo BPS">
        <h1 style="font-style : italic;">BADAN PUSAT STATISTIK<br>KOTA SUKABUMI</h1>
      </div>
      <li><a href="beranda.php" class="<?= ($activePage == 'beranda') ? 'active' : '' ?>"><img src="../../asset/img/icon/home.png" alt="" class="max-icon"> Beranda</a></li>
      <li><a href="kelola_user.php" class="<?= ($activePage == 'kelola_user') ? 'active' : '' ?>"><img src="../../asset/img/icon/user.png" alt="" class="max-icon">Kelola User</a></li>
      <li><a href="pejabat_penandatangan.php" class="<?= ($activePage == 'pejabat_penandatangan') ? 'active' : '' ?>"><img src="../../asset/img/icon/user.png" alt="" class="max-icon">Pejabat Penanda Tangan</a></li>
      <li><a href="kelola_data_kegiatan.php" class="<?= ($activePage == 'kelola_data_kegiatan') ? 'active' : '' ?>"><img src="../../asset/img/icon/kelola_data.png" alt="" class="max-icon">Kelola Data Kegiatan</a></li>
      
      <li>
        <span onclick="toggleSubmenu(this)" class="<?= in_array($activePage, ['data_teknis', 'data_pegawai', 'data_survei', 'aktivitas', 'jabatan_petugas', 'data_satuan']) ? 'active' : '' ?>">
          <img src="../../asset/img/icon/user.png" alt="" class="max-icon">Kelola Data Umum
          <img src="../../asset/img/icon/dropdown.png" alt="" class="drop-icon">
        </span>
        <ul class="submenu <?= in_array($activePage, ['data_teknis', 'data_pegawai', 'data_survei', 'aktivitas', 'jabatan_petugas', 'data_satuan']) ? 'active' : '' ?>">
          <li><a href="data_teknis.php" class="<?= ($activePage == 'data_teknis') ? 'active' : '' ?>">Data Teknis</a></li>
          <li><a href="data_pegawai.php" class="<?= ($activePage == 'data_pegawai') ? 'active' : '' ?>">Data Pegawai</a></li>
          <li><a href="data_survei.php" class="<?= ($activePage == 'data_survei') ? 'active' : '' ?>">Data Survei</a></li>
          <li><a href="aktivitas.php" class="<?= ($activePage == 'aktivitas') ? 'active' : '' ?>">Aktivitas</a></li>
          <li><a href="jabatan_petugas.php" class="<?= ($activePage == 'jabatan_petugas') ? 'active' : '' ?>">Jabatan Petugas</a></li>
          <li><a href="data_satuan.php" class="<?= ($activePage == 'data_satuan') ? 'active' : '' ?>">Data Satuan</a></li>
        </ul>
      </li>
      
      <li>
        <span onclick="toggleSubmenu(this)" class="<?= in_array($activePage, ['mitra_sobat', 'mitra_lainnya']) ? 'active' : '' ?>">
          <img src="../../asset/img/icon/kelola_mitra.png" alt="" class="max-icon">Kelola Data Mitra
          <img src="../../asset/img/icon/dropdown.png" alt="" class="drop-icon">
        </span>
        <ul class="submenu <?= in_array($activePage, ['mitra_sobat', 'mitra_lainnya']) ? 'active' : '' ?>">
          <li><a href="mitra_sobat.php" class="<?= ($activePage == 'mitra_sobat') ? 'active' : '' ?>">Mitra Sobat</a></li>
          <li><a href="mitra_lainnya.php" class="<?= ($activePage == 'mitra_lainnya') ? 'active' : '' ?>">Mitra Lainnya</a></li>
        </ul>
      </li>

      <li><a href="#"><img src="../../asset/img/icon/kelola_template.png" alt="" class="max-icon">Kelola Template</a></li>
      <li><a href="logout.php"><img src="../../asset/img/icon/logout.png" alt="" class="max-icon">Keluar</a></li>
    </ul>
  </div>

  <div class="content" id="content">
    <div class="navbar">
      <div class="toggle-btn" onclick="toggleSidebar()">&#9776;</div>
    </div>

<script>
  function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("hidden");
  }

  function toggleSubmenu(element) {
    const submenu = element.nextElementSibling;
    if (submenu && submenu.classList.contains('submenu')) {
      submenu.classList.toggle('active');
    }
  }
</script>
</body>
</html>
