<?php
require_once 'bukutamu.php';
session_start();

// Initialize the session variable if it doesn't exist
if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

// Handle form submission
if (isset($_POST['submit'])) {
    // Create a new Bukutamu object
    $bukutamu = new bukutamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->name = $_POST['nama'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->keperluan = $_POST['keperluan'];

    // Add the Bukutamu object to the session array
    $_SESSION['bukutamu'][] = $bukutamu;
}
// session_abort()/;
//unset($_SESSION['bukutamu']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengunjung perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            margin-top: 20px;
        }
        .table th, .table td {
            border: none;
        }
        .table th {
            background-color: #337ab7;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">SELAMAT DATANG DI PERPUSTAKAAN STT NURUL FIKRI</h2>
        <h4 class="text-center">Daftar Kunjungan</h4>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $bukutamu) : ?>
                    <tr>
                        <td><?= $bukutamu->timestamp ?></td>
                        <td><?= $bukutamu->name ?></td>
                        <td><?= $bukutamu->email ?></td>
                        <td><?= $bukutamu->keperluan ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>