<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5 - Ridhani Setiadi</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="text" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <?php
    if(isset($_POST['submit'])) {
        $kata = $_POST['text'];
        $panjang = strlen($kata);
        $input = str_split($kata);
        for($a = 0, $b = 0; $a < $panjang; $a++, $b++) {
            echo strtoupper($input[$b]);
            for($i = 1; $i < $panjang; $i++) {
                echo strtolower($input[$b]);
            }
        }
    }
    ?>
</body>
</html>
