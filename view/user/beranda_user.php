<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda User - BPS Kota Sukabumi</title>
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
      font-size: 18px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .welcome {
      background-color: #28264A;
      color: white;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .filter-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
      justify-content: space-between;
      font-size: 10px;
    }
    .filter-bar input[type="number"] {
      padding: 5px;
      font-size: 10px;
      width: 40px;
    }
    .filter-bar input[type="text"] {
      padding: 5px;
      font-size: 10px;
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
      background-color: #ffffff;
    }
    tr:nth-child(odd) {
      background-color: #f9f9f9;
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
      padding: 5px;
    }
    .aksi-buttons img {
      width: 20px;
      height: 20px;
    }
    .pagination {
      display: flex;
      justify-content: right;
      align-items: center;
      gap: 10px;
      margin-top: 10px;
    }
    .pagination button {
      border: 1px solid #ccc;
      background-color: #28264A;
      color: white;
      cursor: pointer;
      font-size: 12px;
      padding: 5px 10px;
      border-radius: 5px;
    }
    .pagination button:hover {
      background-color: #513FC4;
    }
    .pagination span {
      font-size: 12px;
      color: #28264A;
      margin: 0 10px;
    }
    .max-icon {
      max-width: 20px;
    }
  </style>
</head>
<body>

  <?php include '../../components/user/header_user.php'; ?>

  <div class="main-content">
    <div class="title-view">
      <i class="fas fa-home"></i>
      <span>Beranda</span>
    </div>

    <div class="welcome">
      Selamat datang nama user, anda berhasil login sebagai User
    </div>

    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="1"> data</label>
      <input type="text" placeholder="Cari...">
    </div>

    <button class="down-button">+Tambah</button>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Judul SK</th>
          <th>Tanggal Dibuat</th>
          <th>Tahun</th>
          <th>Author</th>
          <th>E-Doc</th> <!-- New column for E-Doc -->
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
          <td><?= $i ?></td>
          <td>Judul SK <?= $i ?></td>
          <td>2025-01-0<?= $i ?></td>
          <td>2025</td>
          <td>Author <?= $i ?></td>
          <td><button title="Lihat"><img src="../../asset/img/icon/lihat.png" alt="Lihat" class="max-icon"></button></td> <!-- E-Doc icon -->
          <td class="aksi-buttons">
            <button title="Edit"><img src="../../asset/img/icon/edit.png" alt="Edit" class="max-icon"></button>
            <button title="Hapus"><img src="../../asset/img/icon/delete.png" alt="Delete" class="max-icon"></button>
            <button title="unduh"><img src="../../asset/img/icon/donwload.png" alt="View" class="max-icon"></button>
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

</body>
</html>
