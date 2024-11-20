<?php
// Koneksi ke database
include('koneksi.php'); // Sesuaikan dengan nama file koneksi database

// Variabel untuk menyimpan status pesan
$status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $nama_matkul = $_POST['nama_matkul'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $dosen = $_POST['dosen'];
    $kelas = $_POST['kelas'];

    // Query untuk memasukkan data ke tabel mata kuliah
    $sql = "INSERT INTO mata_kuliah (nama_matkul, hari, jam, sks, semester, dosen, kelas) 
            VALUES ('$nama_matkul', '$hari', '$jam', '$sks', '$semester', '$dosen', '$kelas')";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil disimpan
        $status = "success";
    } else {
        // Jika terjadi kesalahan
        $status = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Mata Kuliah</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Masukkan nama mata kuliah" required>
            </div>
            <!-- Hari -->
            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <select class="form-select" id="hari" name="hari" required>
                    <option value="" disabled selected>Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <!-- Jam -->
            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="text" class="form-control" id="jam" name="jam" required>
            </div>
            <!-- SKS -->
            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" placeholder="Masukkan jumlah SKS" required>
            </div>
            <!-- Semester -->
            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="number" class="form-control" id="semester" name="semester" placeholder="Masukkan semester" required>
            </div>
            <!-- Dosen -->
            <div class="mb-3">
                <label for="dosen" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Masukkan nama dosen pengajar" required>
            </div>
            <!-- Kelas -->
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan nama kelas" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- SweetAlert -->
    <script>
        <?php if ($status == "success") { ?>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Mata kuliah berhasil ditambahkan.',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then(function() {
                window.location.href = '?p=jadwal_kuliah'; // Redirect ke halaman form tambah mata kuliah
            });
        <?php } else if ($status == "error") { ?>
            Swal.fire({
                title: 'Gagal!',
                text: 'Gagal menambahkan mata kuliah. Silakan coba lagi.',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then(function() {
                window.location.href = '?p=jadwal_kuliah'; // Redirect kembali ke form jika terjadi kesalahan
            });
        <?php } ?>
    </script>
</body>
</html>
