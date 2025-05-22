<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Buat SK - Lainnya</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
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
    <a href="buat_dokumen.php" style="text-decoration: none; color: #333;">Buat SK</a> 
    &gt; <span style="color: #666;">Lainnya</span>
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
        <label for="pulsa">PENGGANTI PULSA CAPI</label>
        <input type="text" id="pulsa" name="pulsa">
      </div>
      <div class="form-group">
        <label for="satuan-pulsa">SATUAN</label>
        <select id="satuan-pulsa" name="satuan-pulsa">
          <option value="">Pilih Satuan</option>
          <option value="1">Pilihan 1</option>
          <option value="2">Pilihan 2</option>
          <option value="3">Pilihan 3</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="honor-pml">BESARAN HONOR PML</label>
        <input type="text" id="honor-pml" name="honor-pml">
      </div>
      <div class="form-group">
        <label for="satuan-pml">SATUAN</label>
        <select id="satuan-pml" name="satuan-pml">
          <option value="">Pilih Satuan</option>
          <option value="1">Pilihan 1</option>
          <option value="2">Pilihan 2</option>
          <option value="3">Pilihan 3</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="honor-pcl">BESARAN HONOR PCL</label>
        <input type="text" id="honor-pcl" name="honor-pcl">
      </div>
      <div class="form-group">
        <label for="satuan-pcl">SATUAN</label>
        <select id="satuan-pcl" name="satuan-pcl">
          <option value="">Pilih Satuan</option>
          <option value="1">Pilihan 1</option>
          <option value="2">Pilihan 2</option>
          <option value="3">Pilihan 3</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="honor-pengolah">BESARAN HONOR PENGOLAH DATA</label>
        <input type="text" id="honor-pengolah" name="honor-pengolah">
      </div>
      <div class="form-group">
        <label for="satuan-pengolah">SATUAN</label>
        <select id="satuan-pengolah" name="satuan-pengolah">
          <option value="">Pilih Satuan</option>
          <option value="1">Pilihan 1</option>
          <option value="2">Pilihan 2</option>
          <option value="3">Pilihan 3</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="transport">BESARAN TRANSPORT LOKAL</label>
        <input type="text" id="transport" name="transport">
      </div>
      <div class="form-group">
        <label for="satuan-transport">SATUAN</label>
        <select id="satuan-transport" name="satuan-transport">
          <option value="">Pilih Satuan</option>
          <option value="1">Pilihan 1</option>
          <option value="2">Pilihan 2</option>
          <option value="3">Pilihan 3</option>
        </select>
      </div>
    </div>

    <!-- Tombol INPUT NAMA -->
    <a href="tambahkan_peserta.php">
      <button class="btn-purple">INPUT NAMA</button>
    </a>
  </div>
</div>

</body>
</html>
