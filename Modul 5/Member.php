<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_member'])) {
    $id_member = $_GET['id_member'];
    deletedata("member", $id_member, "id_member");
    header('location:Member.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Member</title>
    <style>
        html {
            background-image: url('poto_3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        body {
            background: transparent;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #f8f9fa;
        }
        .container {
            margin-top: 10rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            color: #fff;
            background-color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #b02a37;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th,
        td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .table {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .btn-container .btn-primary {
            margin-right: 1rem;
        }
        .float-end {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Member</h1>
        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            <table class="table table-striped table-hover text-center rounded shadow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>Alamat</th>
                        <th>Tanggal Mendaftar</th>
                        <th>Tanggal Terakhir Bayar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = selectalldata("member");
                    while ($data = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $data['id_member'] ?></td>
                            <td><?php echo $data['nama_member'] ?></td>
                            <td><?php echo $data['nomor_member'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['tgl_mendaftar'] ?></td>
                            <td><?php echo $data['tgl_terakhir_bayar'] ?></td>
                            <td>
                                <a href="Form_Member.php?id_member=<?php echo $data['id_member']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="Member.php?id_member=<?php echo $data['id_member']; ?>" onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="col-md-8 text-center mt-4">
                <div class="btn-container">
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <a href="Form_Member.php" class="btn btn-primary btn-sm">Tambah Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
