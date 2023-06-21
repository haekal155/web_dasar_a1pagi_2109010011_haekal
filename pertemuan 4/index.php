<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- membuat variabel untuk ditampilkan pada html ?php echo/?= -->
    <?php $nama = "HAEKAL"; ?> 
    <?php $prodi = "SI"; ?>
    <p> Nama sata adalah <?= $nama ?>, saya mahasiswa prodi <?= $prodi ?></p>

        <?=
        $alas = 7;
        $tinggi = 4;
        ?>
        <p>alas x tinggi / 2</p>
        <p> Hasil = <?= $alas * $tinggi / 2 ?></p>
</html>