<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
    <link rel="stylesheet" href="../type data/style.css">
</head>
<body>
    <div class="identity">
        <img src="../type data/potrait.png" alt="Revan Permana">
        <h1>Revan Permana</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar PHP</h1>
        <h2>Conditions</h2>
        <hr>
            <?php
            // Contoh 2: If-else if-else statement
            if ($nilai >= 90) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai A.";
            } elseif ($nilai >= 80) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai B.";
            } elseif ($nilai >= 70) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai C.";
            } else {
                echo "Nilai Anda $nilai, Anda tidak lulus.";
            }
            ?>
    </div>
</body>
</html>