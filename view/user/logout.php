<?php
// Mulai session
session_start();

// Hapus semua session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login (index.php) yang ada di folder view
header("Location: ../index.php"); // Mengarahkan ke halaman login di folder view
exit();
?>
