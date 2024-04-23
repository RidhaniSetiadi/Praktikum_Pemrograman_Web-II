<!DOCTYPE html>
<html>
<head>
<title>Soal 3 - Ridhani Setiadi</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
        Dari : <br>
        <?php
        $options = array("celcius", "fahrenheit", "reamur", "kelvin");
        foreach ($options as $option) {
            echo '<input type="radio" name="dari" value="'.$option.'" '.(isset($_POST["dari"]) && $_POST["dari"] == $option ? "checked" : "").'>'.$option.'<br>';
        }
        ?>
        Ke : <br>
        <?php
        foreach ($options as $option) {
            echo '<input type="radio" name="ke" value="'.$option.'" '.(isset($_POST["ke"]) && $_POST["ke"] == $option ? "checked" : "").'>'.$option.'<br>';
        }
        ?>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST["konversi"])) {
        if (!empty($_POST["dari"]) && !empty($_POST["ke"])) {
            $nilai = $_POST["nilai"];
            $rumus = array(
                "celcius" => array("celcius" => $nilai, "fahrenheit" => (9/5 * $nilai) + 32, "reamur" => 4/5 * $nilai, "kelvin" => $nilai + 273),
                "fahrenheit" => array("fahrenheit" => $nilai, "celcius" => 5/9 * ($nilai - 32), "reamur" => 4/9 * ($nilai - 32), "kelvin" => 5/9 * ($nilai - 32) + 273),
                "reamur" => array("reamur" => $nilai, "celcius" => 5/4 * $nilai, "fahrenheit" => (9/4 * $nilai) + 32, "kelvin" => 5/4 * $nilai + 273),
                "kelvin" => array("kelvin" => $nilai, "celcius" => $nilai - 273, "fahrenheit" => 9/5 * ($nilai - 273) + 32, "reamur" => 4/5 * ($nilai - 273))
            );
            echo "<h1>Hasil Konversi: ".number_format($rumus[$_POST['dari']][$_POST['ke']], 1).' &deg;'.strtoupper($_POST['ke'])."</h1>";
        }
    }
    ?>
</body>
</html>
