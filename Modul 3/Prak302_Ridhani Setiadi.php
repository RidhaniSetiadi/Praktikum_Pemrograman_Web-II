<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 - Ridhani Setiadi</title>
</head>
<body>
    <form action="" method="post">
        <label for="jumlah">Tinggi :</label>
        <input type="text" name="jumlah"> <br>
        <label for="alamat">Alamat Gambar :</label>
        <input type="text" name="alamat"> <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
    if(isset($_POST['submit'])) {
        $max = $_POST['jumlah'];
        $gambar = $_POST['alamat'];
        $i = 1;
        while($i <= $max) {
            $j = 1;
            while($j < $i) {
                echo "<img style='width: 25px; opacity: 0;' src='$gambar' alt=''>";
                $j++;
            }
            $k = $max;
            while($k >= $i) {
                echo "<img style='width: 25px;' src='$gambar' alt=''>";
                $k--;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>
