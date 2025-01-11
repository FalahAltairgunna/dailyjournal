<?php
// Memulai sesi jika belum aktif
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "koneksi.php"; // Pastikan file koneksi database benar

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

// Ambil username dari sesi
$username = $_SESSION['username'];

// Query untuk mengambil foto profil pengguna dan password dari tabel `user`
$sql = "SELECT foto, password FROM user WHERE username = '$username'";
$result = $conn->query($sql);

// Tentukan foto profil, gunakan default jika tidak ada
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $foto = $row['foto'];
    $password_hash = $row['password']; // Ambil hash password yang ada
} else {
    $foto = 'default-profile.jpg'; // Foto profil default
}

// Logika untuk mengubah password (jika diisi)
if (isset($_POST['simpan'])) {
    // Cek apakah password baru telah diisi
    if (!empty($_POST['password_baru'])) {
        $password_baru = $_POST['password_baru'];

        // Ganti password dengan password baru (gunakan md5 untuk konsistensi)
        $password_baru_hash = md5($password_baru);
        $update_password_sql = "UPDATE user SET password='$password_baru_hash' WHERE username='$username'";
        $conn->query($update_password_sql);
        echo "Password berhasil diubah!";
    }

    // Logika untuk mengganti foto profil (jika diupload)
    if (isset($_FILES['profil']) && $_FILES['profil']['error'] == 0) {
        $foto_baru = $_FILES['profil']['name'];
        $foto_temp = $_FILES['profil']['tmp_name'];

        // Tentukan lokasi penyimpanan file foto profil
        $target_dir = "img/";
        $target_file = $target_dir . basename($foto_baru);

        // Pastikan file foto profil adalah gambar
        if (move_uploaded_file($foto_temp, $target_file)) {
            // Update foto profil di database
            $update_foto_sql = "UPDATE user SET foto='$foto_baru' WHERE username='$username'";
            $conn->query($update_foto_sql);

            // Update foto profil yang akan ditampilkan
            $foto = $foto_baru;
            echo "Foto profil berhasil diperbarui!";
        } else {
            echo "Gagal meng-upload foto profil.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="pt-4">
    <form method="post" action="" enctype="multipart/form-data">
        <!-- Input Password Baru -->
        <div class="mb-3">
            <label for="password_baru" class="form-label">Password Baru</label>
            <input type="password" class="form-control form-control-lg w-100" name="password_baru" placeholder="Masukkan Password Baru">
        </div>

        <!-- Ganti Foto Profil -->
        <div class="mb-3">
            <label for="profil" class="form-label">Ganti Foto Profil</label>
            <input type="file" class="form-control form-control-lg w-100" name="profil">
        </div>

        <!-- Menampilkan foto profil saat ini -->
        <div class="mb-3">
            <label for="profil" class="form-label d-block">Foto Profil Saat Ini</label>
            <img src="img/<?= $foto ?>" alt="Foto Profil Saat Ini" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
        </div>
        
        <div class="text-start">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-lg">
        </div>
    </form>
</div>
</body>
</html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "koneksi.php"; // Koneksi database

