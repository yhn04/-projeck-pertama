<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk menempatkan tombol di tengah halaman */
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            flex-direction: column;
        }

        .button-container a {
            margin: 10px;
        }

        /* Styling untuk tombol */
        .btn {
            font-size: 18px;
            padding: 12px 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        /* Efek hover untuk tombol */
        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }

        .btn-outline-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }

        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="<?php echo "?p=jadwal_ujian"; ?>"><button class="btn btn-outline-secondary">Jadwal Ujian</button></a>
        <a href="<?php echo "?p=jadwal_kuliah"; ?>"><button class="btn btn-outline-primary">Jadwal Kuliah</button></a>
    </div>
</body>
</html>
