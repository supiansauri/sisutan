<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambahkan Peserta</title>
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
    h4 {
      margin-top: 20px;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      font-size: 14px;
    }
    th {
      background: #f0f0f0;
      text-align: left;
    }
    select, input[type="text"] {
      width: 100%;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .btn-purple {
      background-color: #513FC4;
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 4px;
      font-size: 13px;
      cursor: pointer;
    }
    .btn-purple.added {
      background-color: #28a745;
    }
    .btn-finish {
      background: #00aa66;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      border-radius: 6px;
      float: right;
      font-size: 14px;
      margin-top: 20px;
    }
    .popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
      z-index: 999;
    }
    .popup-content {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      text-align: center;
      position: relative;
      max-width: 400px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .popup-content img {
      width: 60px;
      margin-bottom: 16px;
    }
    .popup-content h3 {
      margin: 0;
      font-size: 20px;
      color: #333;
    }
    .popup-content p {
      font-size: 14px;
      color: #666;
      margin: 10px 0 20px;
    }
    .btn-download {
      background: #513FC4;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-size: 15px;
      display: inline-block;
      transition: background 0.3s;
    }
    .btn-download:hover {
      background: #372d9a;
    }
    .close {
      position: absolute;
      top: 10px;
      right: 14px;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<!-- Header -->
<?php include '../../components/user/header_user.php'; ?>

<!-- Main Content -->
<div class="main-content">
  <div class="title-view">
    <i class="fas fa-user-plus"></i>
    <a href="buat_dokumen.php" style="text-decoration: none; color: #333;">Buat SK</a>
    &gt; <a href="lainnya.php" style="text-decoration: none; color: #333;">lainnya</a>
    &gt; <a href="tambahkan_peserta.php" style="text-decoration: none; color: #333;">input nama</a>
  </div>

  <div class="content-box">
    <h3 style="margin-bottom: 20px;">TAMBAHKAN PESERTA</h3>
    <div id="tables"></div>
    <button class="btn-finish" onclick="showPopup()">Selesai</button>
  </div>
</div>

<!-- Popup -->
<div class="popup" id="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup()">×</span>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/2048px-Yes_Check_Circle.svg.png" alt="Success Icon">
    <h3>Dokumen Berhasil Dibuat</h3>
    <p>Silakan unduh dokumen yang telah Anda isi.</p>
    <a href="#" id="download-link" class="btn-download" download="data_peserta.csv">⬇️ Download</a>
  </div>
</div>

<script>
  const jabatanOptions = `
    <option value="" selected disabled>Pilih Jabatan</option>
    <option>PML</option>
    <option>PCL</option>
    <option>Petugas Pengolah Data</option>
    <option>Panitia</option>
    <option>Narasumber</option>
    <option>Narasumber Roleplaying</option>
    <option>INDA</option>
  `;

  function createTable(title) {
    return `
      <h4>${title}</h4>
      <table>
        <thead>
          <tr><th>No</th><th>Nama</th><th>Jabatan</th><th></th></tr>
        </thead>
        <tbody>
          ${[...Array(8)].map((_, i) => `
            <tr>
              <td>${i+1}</td>
              <td><input type="text" placeholder="Nama"></td>
              <td><select>${jabatanOptions}</select></td>
              <td><button class="btn-purple" onclick="markAdded(this)">+ Tambah</button></td>
            </tr>`).join('')}
        </tbody>
      </table>`;
  }

  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("tables").innerHTML =
      createTable("Mitra Sobat") +
      createTable("Mitra Lainnya") +
      createTable("Data Pegawai");
  });

  function markAdded(btn) {
    const row = btn.closest("tr");
    const nameInput = row.querySelector("input");
    const jabatanSelect = row.querySelector("select");

    if (nameInput.value.trim() && jabatanSelect.value) {
      btn.classList.add("added");
      btn.textContent = "✓ Ditambahkan";
    } else {
      alert("Harap isi nama dan pilih jabatan terlebih dahulu.");
    }
  }

  function showPopup() {
    document.getElementById("popup").style.display = "flex";

    // Generate CSV content
    let csv = "No,Nama,Jabatan\n";
    const rows = document.querySelectorAll("table tbody tr");
    let count = 1;

    rows.forEach(row => {
      const name = row.querySelector("input").value.trim();
      const jabatan = row.querySelector("select").value;
      if (name && jabatan) {
        csv += `${count},"${name}","${jabatan}"\n`;
        count++;
      }
    });

    const blob = new Blob([csv], { type: "text/csv" });
    const url = URL.createObjectURL(blob);
    document.getElementById("download-link").href = url;
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
</script>

</body>
</html>
