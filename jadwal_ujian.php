<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Ujian Tengah Semester</title>
    <style>
        /* Global Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
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
            width: 100%;
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

        /* Button Styling */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            color: white;
            background-color: #3498db;
            border: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            background-color: #1f5e87;
        }
    </style>
</head>
<body>
    <a href="<?php echo "?p=home"; ?>"><button class="btn btn-outline-secondary">Kembali</button></a><br><br>
    <div class="container">
        <h2><u>Jadwal Ujian Tengah Semester</u></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Mata Kuliah</th>
                    <th>Jam</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>18 November 2024</td>
                    <td>Metodologi Penelitian</td>
                    <td>16:00 - 18:00</td>
                    <td>H3 s/d H11</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>19 November 2024</td>
                    <td>Pemodelan dan Simulasi</td>
                    <td>08.00-10.00</td>
                    <td>H1 s/d H4</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>21 November 2024</td>
                    <td>Organisasi dan Arsitektur Komputer</td>
                    <td>08.00-10.00</td>
                    <td>H5 s/d H12</td>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>25 November 2024</td>
                    <td>Aljabar Linier dan Matriks</td>
                    <td>08.00-10.00</td>
                    <td>H9 s/d H12</td>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>25 November 2024</td>
                    <td>Data Mining</td>
                    <td>10.30-12.30</td>
                    <td>H1 s/d H3</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>28 November 2024</td>
                    <td>Jaringan Komputer Lanjut</td>
                    <td>08.00-10.00</td>
                    <td>H2 s/d H8</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>28 November 2024</td>
                    <td>Machine Learning</td>
                    <td>13.30-15.30</td>
                    <td>LAB-4 s/d LAB-6</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
