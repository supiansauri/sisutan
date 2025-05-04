<?php
session_start();

// Daftar user (bisa dikembangkan nanti dari database)
$users = [
    [
        'username' => 'admin',
        'password' => 'admin123',
        'role' => 'admin'
    ],
    [
        'username' => 'user1',
        'password' => 'user123',
        'role' => 'user'
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $authenticated = false;

    // Cek apakah username dan password cocok
    foreach ($users as $user) {
        if ($input_username === $user['username'] && $input_password === $user['password']) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Arahkan ke halaman sesuai role
            if ($user['role'] === 'admin') {
                header("Location: admin/beranda.php");
            } else {
                header("Location: user/beranda_user.php");
            }
            exit();
        }
    }

    // Jika tidak cocok
    $_SESSION['error_message'] = "Username atau password salah.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login SISUTAN</title>
    <!-- Font & Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('../asset/img/gedung_bps_updated.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(40, 38, 74, 0.6);
            z-index: -1;
        }

        .login-box {
            width: 400px;
            background: linear-gradient(to bottom, #BED7FB, #FFFFFF);
            margin: 100px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-box img {
            width: 400px;
            height: auto;
        }

        h2 {
            margin: 0;
            color: #007bff;
            font-weight: 600;
        }

        h4 {
            margin: 0;
            font-weight: normal;
        }

        .text-sub {
            font-size: 13px;
            color: #5E5E5E;
            margin-bottom: 8px;
        }

        .login-role {
            font-size: 14px;
            font-weight: 600;
            text-align: left;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group {
            margin: 0px 0 20px;
            text-align: left;
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px 35px 10px 35px;
            border: 1px solid transparent;
            border-radius: 0;
            background-color: #EDF4F4;
            color: #333;
            font-size: 14px;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px 0;
            background-color: #4A90E2;
            color: white;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #357ABD;
        }

        .login-link {
            margin-top: 10px;
            font-size: 13px;
            color: #333;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <img src="../asset/img/logo.png" alt="Logo BPS">
        <h4>Selamat datang pada Aplikasi</h4>
        <h2>SISUTAN</h2>
        <h4>Aplikasi Pembuatan Surat Keputusan</h4>
        <p class="text-sub">Masukkan username dan password</p>

        <?php
        if (isset($_SESSION['error_message'])) {
            echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
            unset($_SESSION['error_message']);
        }
        ?>

        <!-- Form Login -->
        <form method="POST" action="">
            <input type="hidden" name="role" id="roleInput" value="user">

            <div class="login-role" id="roleLabel">USER</div>

            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn">MASUK</button>
        </form>

        <div class="login-link">
            Masuk sebagai <span id="toggleText">Admin</span>? <a onclick="toggleRole()">Klik disini</a>
        </div>
    </div>

    <script>
        function toggleRole() {
            const roleLabel = document.getElementById('roleLabel');
            const toggleText = document.getElementById('toggleText');
            const roleInput = document.getElementById('roleInput');

            if (roleLabel.textContent === 'USER') {
                roleLabel.textContent = 'ADMIN';
                toggleText.textContent = 'User';
                roleInput.value = 'admin';
            } else {
                roleLabel.textContent = 'USER';
                toggleText.textContent = 'Admin';
                roleInput.value = 'user';
            }
        }
    </script>
</body>
</html>
