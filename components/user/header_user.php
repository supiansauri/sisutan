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
      <li><a href="beranda_user.php" class="<?= ($activePage == 'beranda user') ? 'active' : '' ?>"><img src="../../asset/img/icon/home.png" alt="" class="max-icon"> Beranda</a></li>
      <li><a href="buat_dokumen.php" class="<?= ($activePage == 'buat dokumen') ? 'active' : '' ?>"><img src="../../asset/img/icon/white_edit.png" alt="" class="max-icon">Buat Dokumen</a></li>
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
