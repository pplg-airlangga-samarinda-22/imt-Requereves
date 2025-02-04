<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-center">Kalkulator IMT</h2>
        <input type="number" name="bb" placeholder="Masukkan Berat Badan (kg)" step="any" required
            class="w-full p-2 border rounded mb-2">
        <input type="number" name="tb" placeholder="Masukkan Tinggi Badan (m)" step="any" required
            class="w-full p-2 border rounded mb-2">
        <button type="submit" name="kirim"
            class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Submit</button>

        <?php
        if (isset($_POST['kirim'])) {
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];
            
            if ($tb == 0) {
                echo '<div class="mt-4 p-3 bg-red-100 text-red-600 rounded text-center">Tinggi badan tidak boleh 0!</div>';
            } elseif ($bb == 0) {
                echo '<div class="mt-4 p-3 bg-red-100 text-red-600 rounded text-center">Berat badan tidak boleh 0!</div>';
            }elseif ($tb < 0){
                echo '<div class="mt-4 p-3 bg-red-100 text-red-600 rounded text-center">Negatif!</div>';
            }elseif ($bb < 0) {
                echo '<div class="mt-4 p-3 bg-red-100 text-red-600 rounded text-center">Negatif!</div>';
            } 
             else {
                $jumlah = $bb / ($tb * $tb);
                
                if ($jumlah < 17.0) {
                    $hasil = 'Kurus, Kekurangan berat badan berat';
                } elseif ($jumlah >= 17.0 && $jumlah < 18.5) {
                    $hasil = 'Kurus, Kekurangan berat badan ringan';
                } elseif ($jumlah >= 18.5 && $jumlah < 25.0) {
                    $hasil = 'Normal';
                } elseif ($jumlah >= 25.1 && $jumlah < 27.0) {
                    $hasil = 'Gemuk, Kelebihan berat badan tingkat ringan';
                }
                 else {
                    $hasil = 'Gemuk, Kelebihan berat badan tingkat berat';
                }
        ?>
        <div class="mt-4 p-3 bg-gray-100 rounded text-center">
            <p class="font-bold">Hasil IMT: <?php echo number_format($jumlah, 2); ?></p>
            <p><?php echo $hasil; ?></p>
        </div>
        <?php
            }
        }
        ?>
    </form>
</body>

</html>