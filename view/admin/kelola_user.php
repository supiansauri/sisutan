<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola User - BPS Kota Sukabumi</title>
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
    .main-content .title-view{
      margin-bottom: 20px;
    }
    .main-content .welcome {
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

    .filter-bar .filter-bar input[type="text"] {
      padding: 5px;
      font-size: 10px;
    }

    .filter-bar input[type="number"]{
      padding: 5px;
      font-size: 10px;
      width: 40px;
    }
    .filter-bar input[type="text"]{
      font-size: 10px;
      padding: 5px;
    }
    .down-button{
      padding: 8px 39px;
      background-color: #513FC4;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 12px;
      margin-right: 5px;
      border-radius:5px;
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

    /* Pagination Styling */
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
  </style>
</head>
<body>

  <?php include '../../components/admin/header.php'; ?>

  <div class="main-content">
    <div class="title-view">
      <h2><img src="../../asset/img/icon/black_user.png" alt="" style="max-width: 25px;"> Kelola User</h2>
    </div>
    
    <div class="filter-bar">
      <label>Tampilkan <input type="number" min="1" value="1"> data</label>
      <input type="text" placeholder="Cari...">
    </div>
    <a href="tambah_user.php"><button class="down-button" onclick="showForm()" style="margin-top: 10px;">+Tambah</button></a>


    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA PEGAWAI</th>
          <th>TEKNIS</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>ROLE</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
      <?php for ($i = 1; $i <= 10; $i++): ?>
      <tr>
          <td><?= $i ?></td>
          <td>Pegawai <?= $i ?></td>
          <td>Teknis <?= $i ?></td>
          <td>username<?= $i ?></td>
          <td>pass<?= $i ?></td>
          <td><?= ($i % 2 == 0) ? 'Admin' : 'User' ?></td>
          <td class="aksi-buttons">
          <button title="Edit" style="border: none;"><img src="../../asset/img/icon/edit.png" alt="" class="max-icon"></button>
          <button title="Hapus" style="border: none;"><img src="../../asset/img/icon/delete.png" alt="" class="max-icon"></button>
          <button title="Lihat" style="border: none;"><img src="../../asset/img/icon/lihat.png" alt="" class="max-icon"></button>
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
