<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Template - BPS Kota Sukabumi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * { 
      box-sizing: border-box; 
      margin: 0; 
      padding: 0; 
    }
    body { 
      font-family: Arial, sans-serif; 
      background-color: #f5f5f5; 
    }
    .main-content { 
      padding: 20px; 
    }
    .main-content .title-view {
      margin-bottom: 20px;
    }
    .main-content .welcome {
      background-color: #28264A;
      color: white;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    /* Beranda Title */
    .beranda-title {
      font-size: 16px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .beranda-title i {
      font-size: 18px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      font-size: 12px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #28264A;
      color: white;
    }

    /* Alternating row colors */
    tr:nth-child(even) {
      background-color: #ffffff; /* White color for even rows */
    }

    tr:nth-child(odd) {
      background-color: #f9f9f9; /* Light grey color for odd rows */
    }

    .filter-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
      justify-content: space-between;
      font-size: 10px;
    }

    .filter-bar input[type="text"], .filter-bar input[type="number"] {
      padding: 5px;
      font-size: 10px;
    }

    .filter-bar input[type="number"] {
      width: 40px;
    }

    .down-button { 
      padding: 8px 39px;
      background-color: #513FC4;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 12px;
      margin-top: 10px;
      border-radius: 5px;
    }

    .max-icon { 
      max-width: 20px; 
    }

    /* Menyusun ikon aksi di tengah */
    .aksi-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .aksi-buttons button {
      border: none;
      background: none;
      cursor: pointer;
    }

    .aksi-buttons img {
      max-width: 20px;
    }

    /* Halaman Pagination Styling */
    .pagination {
      display: flex;
      justify-content: flex-end;
      margin-top: 20px;
    }

    .pagination button {
      border: none;
      background-color: transparent;
      cursor: pointer;
      font-size: 12px;
      color: #28264A;
      margin: 0 5px;
    }

    .pagination span {
      font-size: 12px;
      color: #28264A;
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <?php include '../../components/admin/header.php'; ?>

  <div class="main-content">
    <div class="title-view">
      <h2><img src="../../asset/img/icon/template.png" alt="" class="max-icon"> Kelola Template</h2>
    </div>
    
    <!-- Filter Bar -->
    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="1"> data</label>
      <input type="text" placeholder="Cari...">
    </div>

    <!-- Tombol Tambah -->
    <a href="tambah_template.php"><button class="down-button" style="margin-top: 10px;">+Tambah</button></a>

    <table style="text-align: center;">
      <thead>
        <tr>
          <th>NO</th>
          <th>JENIS TEMPLATE</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 1; $i <= 5; $i++): ?>
        <tr>
          <td><?= $i ?></td>
          <td>Template <?= $i ?></td>
          <td class="aksi-buttons">
             <!-- Tombol Edit dengan link menuju edit_template.php -->
            <a href="edit_template.php?id=<?= $i ?>" title="Edit" style="text-decoration: none;">
                <button style="border: none; background: none; cursor: pointer;">
                    <img src="../../asset/img/icon/edit.png" alt="Edit" class="max-icon">
                </button>
            </a>

            <!-- Tombol Hapus -->
            <button title="Hapus" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/delete.png" alt="Hapus" class="max-icon">
            </button>

            <!-- Tombol Lihat -->
            <button title="Lihat" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/lihat.png" alt="Lihat" class="max-icon">
            </button>
          </td>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>

    <div style="display: flex; justify-content: right; margin-top: 10px;">
      <button>&laquo;&laquo;</button>
      <span style="margin: 0 10px;">1</span>
      <button>&raquo;&raquo;</button>
    </div>
  </div>

  <script>
    function toggleSubmenu(element) {
      const submenu = element.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu')) {
        submenu.classList.toggle('active');
      }
    }
  </script>
</body>
</html>
