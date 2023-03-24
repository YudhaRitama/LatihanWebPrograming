<?php
    $iniadalahjudul= "SAYA JUDUL";
    $konten= "<h3>Testing php</h3><p>ini konten</p><p>Hallo Dunia</p><p>RRQ raja lokal</P>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $iniadalahjudul; ?> </title>
</head>
<body>

    <?php
        echo $konten;
    ?>
    
</body>
</html>