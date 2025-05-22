<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat SK - Pelatihan/Briefing/FGD</title>
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
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 18px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }
    .content-box {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .form-row {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      flex: 1;
      min-width: 200px;
    }
    .form-group label {
      margin-bottom: 4px;
      font-size: 12px;
    }
    .form-group input,
    .form-group select {
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .btn-purple {
      background-color: #513FC4;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      font-size: 13px;
      cursor: pointer;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<!-- Header -->
<?php include '../../components/user/header_user.php'; ?>

<!-- Main Content -->
<div class="main-content">
  <div class="title-view">
    <i class="fas fa-file-alt"></i>
    <a href="buat_dokumen.php" style="text-decoration: none; color: #333;">

      Buat SK
    </a> &gt; <span style="color: #666;">Pelatihan/Briefing/FGD</span>
    </div>
  <div class="content-box">
    <div class="form-row">
      <div class="form-group">
        <label for="tanggal">Tanggal SK</label>
        <input type="date" id="tanggal" name="tanggal">
      </div>
      <div class="form-group">
        <label for="no-sk">NO SK</label>
        <input type="text" id="no-sk" name="no-sk">
      </div>
      <div class="form-group">
        <label for="kegiatan">KEGIATAN</label>
        <input type="text" id="kegiatan" name="kegiatan">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="status">STATUS</label>
        <select id="status" name="status">
          <option value="" disabled selected>Pilih Status</option>
          <option value="online">Online</option>
          <option value="offline">Offline</option>
          <option value="online_offline">Online & Offline</option>
        </select>
      </div>
      <div class="form-group">
        <label for="metode">METODE</label>
        <input type="text" id="metode" name="metode">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="pulsa">PENGGANTI PULSA</label>
        <input type="text" id="pulsa" name="pulsa">
      </div>
      <div class="form-group">
        <label for="satuan-pulsa">SATUAN</label>
        <input type="text" id="satuan-pulsa" name="satuan-pulsa">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="uang-saku">UANG SAKU</label>
        <input type="text" id="uang-saku" name="uang-saku">
      </div>
      <div class="form-group">
        <label for="satuan-saku">SATUAN</label>
        <input type="text" id="satuan-saku" name="satuan-saku">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="honor">BESARAN HONOR</label>
        <input type="text" id="honor" name="honor">
      </div>
      <div class="form-group">
        <label for="satuan-honor">SATUAN</label>
        <input type="text" id="satuan-honor" name="satuan-honor">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="transport">UANG TRANSPORT</label>
        <input type="text" id="transport" name="transport">
      </div>
      <div class="form-group">
        <label for="satuan-transport">SATUAN</label>
        <input type="text" id="satuan-transport" name="satuan-transport">
      </div>
    </div>

    <!-- Tombol INPUT NAMA -->
<a href="input_nama.php">
  <button class="btn-purple">INPUT NAMA</button>
</a>

</div>

</body>
</html>
