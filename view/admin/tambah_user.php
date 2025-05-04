<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User - BPS Kota Sukabumi</title>
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
      color: #28264A;
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
      width: 50%;
      margin: 0 auto;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
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

    select, input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    select:focus, input[type="text"]:focus {
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

    /* Dropdown Select Styling */
    select {
      height: 40px;
    }
  </style>
</head>

<body>

  <?php include '../../components/admin/header.php'; ?>

  <div class="content">
    <div class="breadcrumb">
      <a href="kelola_user.php"><i class="fas fa-user"></i> Kelola User</a> > <span>Tambah</span>
    </div>

    <div class="container">
      <h2>Tambah User</h2>

      <form action="submit_form.php" method="POST">
        <div class="form-group">
          <label for="nama_pegawai">Nama Pegawai</label>
          <select id="nama_pegawai" name="nama_pegawai" required>
            <option value="">Pilih Nama Pegawai</option>
            <option value="pegawai1">Pegawai 1</option>
            <option value="pegawai2">Pegawai 2</option>
            <option value="pegawai3">Pegawai 3</option>
          </select>
        </div>

        <div class="form-group">
          <label for="role">Role</label>
          <select id="role" name="role" required>
            <option value="">Pilih Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="staff">Staff</option>
          </select>
        </div>

        <div class="form-group">
          <label for="teknis">Teknis</label>
          <select id="teknis" name="teknis" required>
            <option value="">Pilih Teknis</option>
            <option value="teknis1">Teknis 1</option>
            <option value="teknis2">Teknis 2</option>
          </select>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" id="password" name="password" required placeholder="Masukkan Password">
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required placeholder="Masukkan Username">
        </div>

        <button type="submit" class="btn">Simpan</button>
      </form>
    </div>
  </div>

</body>

</html>
