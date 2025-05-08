<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jabatan Petugas - BPS Kota Sukabumi</title>
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
    .title-view {
      margin-bottom: 20px;
    }
    .welcome {
      background-color: #28264A;
      color: white;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
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
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    tr:nth-child(odd) {
      background-color: #ffffff;
    }
    .filter-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
      justify-content: space-between;
      font-size: 10px;
    }
    .filter-bar input[type="text"] {
      padding: 5px;
      font-size: 10px;
      
    }
    .filter-bar input[type="number"] {
      padding: 5px;
      font-size: 10px;
      width: 40px;
    }
    .down-button {
      padding: 8px 39px;
      background-color: #513FC4;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 12px;
      margin-right: 5px;
      border-radius: 5px;
    }
    .max-icon {
      max-width: 20px;
    }
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
  </style>
</head>
<body>

  <?php include '../../components/admin/header.php'; ?>

  <div class="main-content">
    <div class="title-view">
      <h2><img src="../../asset/img/icon/data_umum.png" alt="" class="max-icon"> Jabatan Petugas</h2>
    </div>

    <!-- Filter Bar -->
    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="11"> data</label>
      <input type="text" placeholder="Cari...">
    </div>

    <a href="tambah_jabatan.php"><button class="down-button" onclick="showForm()" style="margin-top: 10px;">+Tambah</button></a>

    <!-- Jabatan Petugas Table -->
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>JABATAN PETUGAS</th>
          <th>URAIAN JABATAN</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $jabatan_petugas = [
          ['PML', 'Petugas Pemeriksa Lapang'],
          ['PCL', 'PCL']
        ];

        foreach ($jabatan_petugas as $i => $item): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td class="aksi-buttons">
              <a href="edit_jabatan.php?id=<?= $i ?>" title="Edit" style="text-decoration: none;">
                <button style="border: none; background: none; cursor: pointer;">
                    <img src="../../asset/img/icon/edit.png" alt="Edit" class="max-icon">
                </button>
              </a>
              <button title="Hapus" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/delete.png" alt="Hapus" class="max-icon">
              </button>
              <button title="Lihat" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/lihat.png" alt="Lihat" class="max-icon">
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Status Table -->
    <div class="title-view" style="margin-top: 40px;">
      <h3>Status (Digunakan untuk Pelatihan/Briefing)</h3>
      <a href="tambah_status.php"><button class="down-button" style="margin-top: 10px;">+ Tambah</button></a>
    </div>

    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>STATUS PADA PELATIHAN/BRIEFING</th>
          <th>URAIAN STATUS</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $status_pelatihan = [
          ['Peserta', 'Peserta'],
          ['Narasumber', 'Narasumber']
        ];

        foreach ($status_pelatihan as $i => $item): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td class="aksi-buttons">
              <a href="edit_status.php?id=<?= $i ?>" title="Edit" style="text-decoration: none;">
                <button style="border: none; background: none; cursor: pointer;">
                    <img src="../../asset/img/icon/edit.png" alt="Edit" class="max-icon">
                </button>
              </a>
              <button title="Hapus" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/delete.png" alt="Hapus" class="max-icon">
              </button>
              <button title="Lihat" style="border: none; background: none; cursor: pointer;">
                <img src="../../asset/img/icon/lihat.png" alt="Lihat" class="max-icon">
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
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
