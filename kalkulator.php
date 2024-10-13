<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="number"], select {
            margin: 5px;
            padding: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Kalkulator Sederhana</h1>
<form method="post" action="">
    <input type="number" name="bilangan1" required placeholder="Bilangan Pertama">
    <input type="number" name="bilangan2" required placeholder="Bilangan Kedua">
    <select name="operasi" required>
        <option value="">Pilih Operasi</option>
        <option value="tambah">Penjumlahan</option>
        <option value="kurang">Pengurangan</option>
        <option value="kali">Perkalian</option>
        <option value="bagi">Pembagian</option>
    </select>
    <input type="submit" value="Hitung">
</form>

<div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        // Melakukan operasi sesuai pilihan
        if ($operasi == "tambah") {
            $hasil = $bilangan1 + $bilangan2;
            echo "Hasil Penjumlahan: " . $hasil;
        } elseif ($operasi == "kurang") {
            $hasil = $bilangan1 - $bilangan2;
            echo "Hasil Pengurangan: " . $hasil;
        } elseif ($operasi == "kali") {
            $hasil = $bilangan1 * $bilangan2;
            echo "Hasil Perkalian: " . $hasil;
        } elseif ($operasi == "bagi") {
            if ($bilangan2 != 0) {
                $hasil = $bilangan1 / $bilangan2;
                echo "Hasil Pembagian: " . $hasil;
            } else {
                echo "Kesalahan: Pembagian dengan nol tidak diperbolehkan.";
            }
        }
    }
    ?>
</div>

</body>
</html>
