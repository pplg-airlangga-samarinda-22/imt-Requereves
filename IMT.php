<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT</title>
</head>

<body>

    <form method="POST">
        <h2>Kalkulator IMT</h2>
        <input type="number" name="bb" placeholder="Masukan Berat Badan" step="any" required>
        <br>
        <input type="number" name="tb" placeholder="Masukan tinggi badan" step="any" required>
        <br>
        <button type="submit" name="kirim">Submit</button>

        <?php
        if (isset($_POST['kirim'])) {
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];

            $jumlah = $bb / ($tb * $tb);

            if ($jumlah < 17.0) {
                $hasil = 'Kurus, Kekurangan berat badan berat';
            } elseif ($jumlah >= 17.0 && $jumlah < 18.5) {
                $hasil = 'Kurus, Kekurangan berat badan ringan';
            } elseif ($jumlah >= 18.5 && $jumlah < 25.0) {
                $hasil = 'normal';
            } elseif ($jumlah >= 25.1 && $jumlah < 27.0) {
                $hasil = 'Gemuk, Kelebihan berat badan tingkat ringan';
            } else {
                $hasil = 'Gemuk, Kelebihan berat badan tingkat berat';
            }

            echo '<br>';
            echo $jumlah;
            echo '<br>';
            echo $hasil;
        }

        ?>

    </form>
</body>

</html>