  <style>
       /* Global Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fb;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 100%; /* Remove the max-width for full width */
    margin: 40px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, #f0f4f8, #e6eff8);
}

h2 {
    text-align: center;
    color: #2d3436;
    font-size: 2.5rem;
    margin-bottom: 30px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

table {
    width: 100%; /* Set width to 100% */
    border-collapse: collapse;
    border-radius: 10px;
    overflow: hidden;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

th, td {
    padding: 1rem;
    text-align: center;
    vertical-align: middle;
    border: 1px solid #e0e0e0;
    font-size: 1.1rem;
    color: #2d3436;
}

th {
    background-color: #3498db;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f7f9fb;
}

tr:hover {
    background-color: #e3f2fd;
}

/* Stripes and Hover Effects */
tr:nth-child(odd) {
    background-color: #f5f8fc;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f1f5f8;
}

.table-striped tbody tr:hover {
    background-color: #e3f2fd;
}

/* Responsive Styling */
@media screen and (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

    th, td {
        padding: 0.75rem;
    }

    .container {
        padding: 10px;
    }
}

@media screen and (max-width: 480px) {
    h2 {
        font-size: 1.8rem;
    }

    th, td {
        font-size: 0.9rem;
    }
}
    </style>
<a href="<?php echo "?p=home"; ?>"><button class="btn btn-outline-secondary">Kembali</button></a><br><br>
<a href="<?php echo "?p=add_matkul"; ?>"><button class="btn btn-outline-primary">Tambahkan</button></a>

<?php
// Koneksi ke database
include('koneksi.php'); // Sesuaikan dengan nama file koneksi database

// Mengambil data mata kuliah dari database
$sql = "SELECT * FROM mata_kuliah";
$result = mysqli_query($conn, $sql);

// Mengecek apakah ada data
if (mysqli_num_rows($result) > 0) {
    // Jika ada data, tampilkan dalam tabel
    echo "<div class='container mt-5'>
            <h2 class='text-center mb-4'>Daftar Mata Kuliah</h2>
            <div class='table-responsive'>
                <table class='table table-striped table-hover shadow rounded'>
                    <thead class='table-dark'>
                        <tr>
                            <th>Nama Mata Kuliah</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Dosen</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>";

    // Menampilkan data setiap mata kuliah
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['nama_matkul'] . "</td>
                <td>" . $row['hari'] . "</td>
                <td>" . $row['jam'] . "</td>
                <td>" . $row['sks'] . "</td>
                <td>" . $row['semester'] . "</td>
                <td>" . $row['dosen'] . "</td>
                <td>" . $row['kelas'] . "</td>
                <td>
                    <a href='edit_matkul.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>
                        <i class='bi bi-pencil'></i> Edit
                    </a><br>
                    <a href='delete_matkul.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus mata kuliah ini?\")'>
                        <i class='bi bi-trash'></i> Hapus
                    </a>
                </td>
              </tr>";
    }

    echo "</tbody>
        </table><br><br><br><br>
    </div>
</div>";
} else {
    echo "<div class='container mt-5'>
            <p class='text-center'>Tidak ada mata kuliah yang ditemukan.</p>
          </div>";
}

// Menutup koneksi database
mysqli_close($conn);
?>
