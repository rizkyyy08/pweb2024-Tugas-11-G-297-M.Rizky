<!DOCTYPE html>
<html>
<head>
    <title>Penilaian</title>
</head>
<body>
    <form method="post">
        Masukkan Nilai: <input type="number" name="nilai">
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        if ($nilai >= 90){
            echo "Nilai Anda $nilai, Anda Lulus dengan Predikat A";
        } elseif ($nilai >= 80) {
            echo "Nilai Anda $nilai, Anda Lulus dengan Predikat B";
        } elseif ($nilai >= 70) {
            echo "Nilai Anda $nilai, Anda Lulus dengan Predikat C";
        } elseif ($nilai >= 60) {
            echo "Nilai Anda $nilai, Anda Lulus dengan Predikat D";
        } else {
            echo "Nilai Anda $nilai, Anda Tidak Lulus";
        }
    }
    ?>
</body>
</html>
