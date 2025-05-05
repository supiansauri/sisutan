<?php
// Ambil ID user dari URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Logika untuk mengambil data user berdasarkan ID (misalnya dari database)
$user_data = [
    'nama_pegawai' => 'Pegawai ' . $id,
    'teknis' => 'Teknis ' . $id,
    'username' => 'username' . $id,
    'role' => $id % 2 == 0 ? 'Admin' : 'User',
    'password' => 'pass' . $id
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User - BPS Kota Sukabumi</title>
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
      width: 94%; /* Set container width to 70% */
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
      <h2><a href="kelola_user.php" style=""><img src="../../asset/img/icon/black_user.png" alt="" style="max-width: 25px;"> Kelola User</a> > <span>Edit</span></h2>
    </div>

    <div class="container">

      <form action="submit_form.php" method="POST">
        <div class="form-column">
          <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <select id="nama_pegawai" name="nama_pegawai" required>
              <option value="<?= $user_data['nama_pegawai'] ?>" selected><?= $user_data['nama_pegawai'] ?></option>
              <option value="pegawai1">Pegawai 1</option>
              <option value="pegawai2">Pegawai 2</option>
              <option value="pegawai3">Pegawai 3</option>
            </select>
          </div>

          <div class="form-group">
            <label for="teknis">Teknis</label>
            <select id="teknis" name="teknis" required>
              <option value="<?= $user_data['teknis'] ?>" selected><?= $user_data['teknis'] ?></option>
              <option value="teknis1">Teknis 1</option>
              <option value="teknis2">Teknis 2</option>
            </select>
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required placeholder="Masukkan Username" value="<?= $user_data['username'] ?>">
          </div>

          <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" required>
              <option value="<?= $user_data['role'] ?>" selected><?= $user_data['role'] ?></option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
              <option value="staff">Staff</option>
            </select>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" required placeholder="Masukkan Password" value="<?= $user_data['password'] ?>">
          </div>

          <button type="submit" class="btn">Simpan</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
