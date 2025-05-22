<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pejabat Penandatangan - BPS Kota Sukabumi</title>
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

    .max-icon { max-width: 20px; }

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
      <h2><img src="../../asset/img/icon/black_user.png" alt="" style="max-width: 25px;"> Pejabat Penandatangan</h2>
    </div>

    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="1"> data</label>

    </div>

    <!-- Tabel Pejabat Pembuat Komitmen -->
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA PEJABAT PEMBUAT KOMITMEN</th>
          <th>NIP</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 1; $i <= 3; $i++): ?>
        <tr>
          <td><?= $i ?></td>
          <td>Pejabat <?= $i ?></td>
          <td>19790101 200312 1 00<?= $i ?></td>
          <td class="aksi-buttons">
            <button title="Edit"><img src="../../asset/img/icon/edit.png" alt="" class="max-icon"></button>
            <button title="Hapus"><img src="../../asset/img/icon/delete.png" alt="" class="max-icon"></button>
          </td>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>

    <!-- Tabel DIPA -->
    <h3 style="margin-top: 40px;">DIPA</h3>
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>NOMOR DIPA</th>
          <th>TANGGAL DIPA</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($j = 1; $j <= 2; $j++): ?>
        <tr>
          <td><?= $j ?></td>
          <td>Nomor DIPA <?= $j ?></td>
          <td><?= date('d-m-Y', strtotime("2025-01-0$j")) ?></td>
          <td class="aksi-buttons">
            <button title="Edit"><img src="../../asset/img/icon/edit.png" alt="" class="max-icon"></button>
            <button title="Hapus"><img src="../../asset/img/icon/delete.png" alt="" class="max-icon"></button>
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
