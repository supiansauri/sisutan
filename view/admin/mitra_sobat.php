<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mitra Sobat - BPS Kota Sukabumi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: Arial, sans-serif; background-color: #f5f5f5; }
    .main-content { padding: 20px; }
    .title-view { margin-bottom: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 12px; }
    th, td { border: 1px solid #ccc; padding: 10px; }
    th { background-color: #28264A; color: white; text-align: center; }
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:nth-child(odd) { background-color: #ffffff; }
    .filter-bar { display: flex; align-items: center; gap: 10px; margin-top: 20px; justify-content: space-between; font-size: 10px; }
    .filter-bar input[type="text"] { padding: 5px; font-size: 10px; width: 40%; }
    .filter-bar input[type="number"] { padding: 5px; font-size: 10px; width: 40px; }
    .down-button { padding: 8px 39px; background-color: #513FC4; color: white; border: none; cursor: pointer; font-size: 12px; margin-right: 5px; border-radius: 5px; }
    .max-icon { max-width: 20px; }
    .aksi-buttons { display: flex; justify-content: center; gap: 10px; }
    .aksi-buttons button { border: none; background: none; cursor: pointer; }
    .aksi-buttons img { max-width: 20px; }
  </style>
</head>
<body>

  <?php include '../../components/admin/header.php'; ?>

  <div class="main-content">
    <div class="title-view">
      <h2><img src="../../asset/img/icon/black_kelola_mitra.png" alt="" class="max-icon"> Kelola Data Mitra Sobat</h2>
    </div>

    <!-- Filter Bar -->
    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="11"> data</label>
      <input type="text" placeholder="Cari...">
    </div>

    <button class="down-button" style="margin-top: 10px;">+ Tambah</button>

    <!-- Mitra Sobat Table -->
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>NO MITRA</th>
          <th>NAMA</th>
          <th>NIK</th>
          <th>ALAMAT</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 1; $i <= 5; $i++): ?>
        <tr>
          <td><?= $i ?></td>
          <td>Mitra <?= $i ?></td>
          <td>Nama Mitra <?= $i ?></td>
          <td>123456789<?= $i ?></td>
          <td>Alamat Mitra <?= $i ?></td>
          <td class="aksi-buttons">
            <button title="Edit"><img src="../../asset/img/icon/edit.png" alt="Edit" class="max-icon"></button>
            <button title="Hapus"><img src="../../asset/img/icon/delete.png" alt="Delete" class="max-icon"></button>
            <button title="Lihat"><img src="../../asset/img/icon/lihat.png" alt="View" class="max-icon"></button>
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
    // Optional JavaScript for submenu or further interactivity
  </script>
</body>
</html>
