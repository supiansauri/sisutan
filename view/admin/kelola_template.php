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
    .title-view {
      margin-bottom: 20px;
    }
    .title-view h2 img {
      max-width: 25px;
      vertical-align: middle;
      margin-right: 5px;
    }
    .filter-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 10px;
    }
    .filter-bar input[type="number"] {
      padding: 5px;
      font-size: 12px;
      width: 60px; /* <<< disamakan dengan kelola user */
    }
    .filter-bar input[type="text"] {
      padding: 5px;
      font-size: 12px;
      width: 250px; /* <<< disamakan dengan kelola user */
    }
    .down-button {
      padding: 8px 20px;
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
      font-size: 12px;
      margin-top: 10px;
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
    tr:nth-child(even) { background-color: #ffffff; }
    tr:nth-child(odd) { background-color: #f9f9f9; }
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
    }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<div class="main-content">
  <div class="title-view">
    <h2><img src="../../asset/img/icon/template.png" alt=""> Kelola Template</h2>
  </div>

  <div class="filter-bar">
    <label>Tampilkan <input type="number" min="1" value="11"> data</label>
    <input type="text" placeholder="Cari...">
  </div>
  <a href="tambah_template.php"><button class="down-button">+ Tambah</button></a>

  <table>
    <thead>
      <tr>
        <th>NO</th>
        <th>JENIS TEMPLATE</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 7; $i++): ?>
      <tr>
        <td><?= $i ?></td>
        <td>Template <?= $i ?></td>
        <td class="aksi-buttons">
          <a href="edit_template.php?id=<?= $i ?>" title="Edit">
            <button><img src="../../asset/img/icon/edit.png" alt="Edit"></button>
          </a>
          <button title="Hapus">
            <img src="../../asset/img/icon/delete.png" alt="Hapus">
          </button>
          <button title="Salin">
            <img src="../../asset/img/icon/lihat.png" alt="Salin">
          </button>
        </td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>

  <div class="pagination">
    <button>&laquo;&laquo;</button>
    <span>1</span>
    <button>&raquo;&raquo;</button>
  </div>
</div>

</body>
</html>
