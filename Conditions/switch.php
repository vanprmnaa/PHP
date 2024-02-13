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
            // Contoh 3: Switch statement
            $grade = '';

            switch (true) {
                case $nilai >= 90:
                    $grade = 'A';
                    break;
                case $nilai >= 80:
                    $grade = 'B';
                    break;
                case $nilai >= 70:
                    $grade = 'C';
                    break;
                default:
                    $grade = 'D';
            }

            echo "Grade Anda: $grade\n";
            ?>
    </div>
</body>
</html>