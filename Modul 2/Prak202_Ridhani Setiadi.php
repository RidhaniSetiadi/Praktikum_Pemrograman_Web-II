<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 - Ridhani Setiadi</title>
    <style>
        span {
            color: red;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
        <div class="form-group">
            <label for="name">Nama : </label>
            <input type="text" id="name" name="name">
            <span class="text-danger">* <?= isset($_GET['submit']) && $_GET['name'] == "" ? "nama tidak boleh kosong" : "" ?></span>
        </div>

        <div class="form-group"> 
            <label for="nim" class="form-label">NIM   :</label>
            <input type="text" id="nim" name="nim">
            <span class="text-danger">* <?= isset($_GET['submit']) && $_GET['nim'] == "" ? "NIM tidak boleh kosong" : "" ?></span>
        </div>

        <div>
            <p>Jenis Kelamin : <span class="text-danger">* <?= isset($_GET['submit']) && !isset($_GET['jeniskelamin']) ? "Jenis kelamin tidak boleh kosong" : "" ?></span></p>

            <input type="radio" name="jeniskelamin" id="jeniskelamin1" value="Laki-Laki">
            <label for="jeniskelamin1">Laki-Laki</label>
            <input type="radio" name="jeniskelamin" id="jeniskelamin2" value="Perempuan">
            <label for="jeniskelamin2">Perempuan</label>
        </div>

        <div> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php   
        if(isset($_GET['submit']) && $_GET['name'] != "" && isset($_GET['jeniskelamin']) && $_GET['nim'] != "" ){
            $name = $_GET['name'];
            $nim = $_GET['nim'];
            $jeniskelamin = $_GET['jeniskelamin'];

            echo "<h2>Output:</h2>";
            echo "Nama : $name <br>";
            echo "NIM : $nim <br>";
            echo "Jenis Kelamin : $jeniskelamin <br>";
        }
    ?>
</body>
</html>
