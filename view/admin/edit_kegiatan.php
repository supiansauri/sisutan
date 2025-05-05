<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Kegiatan - BPS Kota Sukabumi</title>
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
      display: flex;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .content {
      flex-grow: 1;
      background-color: #f5f5f5;
    }

    .breadcrumb {
      font-size: 14px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .breadcrumb a {
      color: rgb(0, 0, 0);
      text-decoration: none;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .container {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 94%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-column {
      display: flex;
      flex-direction: column;
      gap: 15px;
      width: 100%;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      font-size: 14px;
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    select,
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    select:focus,
    input[type="text"]:focus {
      border-color: #513FC4;
      outline: none;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #513FC4;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #4030a5;
    }

    /* Responsiveness untuk layar kecil */
    @media screen and (max-width: 768px) {
      .container {
        gap: 15px;
      }
    }
  </style>
</head>

<body>

  <?php include '../../components/admin/header.php'; ?>

  <div class="content">
    <div class="breadcrumb" style="margin-top: 20px; margin-left: 20px;">
      <h2><a href="kelola_data_kegiatan.php" style="text-decoration: none;">
        <img src="../../asset/img/icon/black_kelola_data.png" alt="" style="max-width: 20px;">
        Kelola Data Kegiatan
      </a> > <span>Edit</span></h2>
    </div>

    <div class="container">
      <form action="submit_form.php" method="POST">
        <div class="form-column">
          <div class="form-group">
            <label for="teknis">Teknis</label>
            <select id="teknis" name="teknis" required>
              <option value="">Pilih Teknis</option>
              <option value="teknis1" selected>Teknis 1</option>
              <option value="teknis2">Teknis 2</option>
            </select>
          </div>

          <div class="form-group">
            <label for="aktivitas">Aktivitas</label>
            <select id="aktivitas" name="aktivitas" required>
              <option value="">Pilih Aktivitas</option>
              <option value="aktivitas1" selected>Aktivitas 1</option>
              <option value="aktivitas2">Aktivitas 2</option>
            </select>
          </div>

          <div class="form-group">
            <label for="nama_survei">Nama Survei</label>
            <select id="nama_survei" name="nama_survei" required>
              <option value="">Pilih Nama Survei</option>
              <option value="survei1" selected>Survei 1</option>
              <option value="survei2">Survei 2</option>
            </select>
          </div>

          <button type="submit" class="btn">Simpan</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
