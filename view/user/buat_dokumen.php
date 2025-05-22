<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buat SK - BPS Kota Sukabumi</title>
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
    .box {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .btn-options {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 50px;
      flex-wrap: wrap;
    }
    .btn-options a {
      background-color: #513FC4;
      color: white;
      text-align: center;
      font-weight: bold;
      font-size: 14px;
      padding: 40px 20px;
      border-radius: 8px;
      text-decoration: none;
      width: 200px;
      transition: background-color 0.3s;
    }
    .btn-options a:hover {
      background-color: #3f32a0;
    }
  </style>
</head>
<body>

  <!-- Header dari file terpisah -->
  <?php include '../../components/user/header_user.php'; ?>

  <!-- Main Content -->
  <div class="main-content">
    <div class="title-view">
      <i class="fas fa-file-alt"></i>
      <span>Buat SK</span>
    </div>

    <div class="box">
      <h3 style="font-size: 14px; color: #555;">Tampilan klik TAMBAH</h3>
      <div class="btn-options">
        <a href="../user/briefing_pelatihan_FGD.php">PELATIHAN/<br>BRIEFING/FGD</a>
        <a href="../user/lainnya.php">LAINNYA</a>
      </div>
    </div>
  </div>

</body>
</html>
