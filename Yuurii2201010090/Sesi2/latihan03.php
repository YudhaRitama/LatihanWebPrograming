<?php
    $pr = "1";
    if(isset($_GET["pg"])){
        $pr = $_GET["pg"];
    }
    $konten = "";
    $inijudul = "";

    switch($pr){
        case "p1":
            $inijudul = "Halaman 1";
            $konten = "<h3>Halaman p1</h3>";
            $konten .= "<p> Menampilkan Halaman p1</p>";
            break;
        case "p2":
            $inijudul = "Halaman 2";
            $konten ="<h3>Halaman p2</h3>";
            $konten .= "<p> Menampilkan Halaman p2</p>";
            break;
        case "p3":
            $inijudul = "Halaman 3";
            $konten = "<h3>Halaman p3</h3>";
            $konten .= "<p> Menampilkan Halaman p3</p>";
            break;
        default:
            $inijudul = "Halaman Kacau";
            $konten = "<h3>Ngawur Anda Cuk!</h3>";
            $konten .= "<p>Mana Ada Syntak Kayak Gitu</p>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$inijudul;?></title>
</head>
<body>

    <a href="latihan03.php?pg=p1">Halaman 1</a> <p><a href="latihan03.php?pg=p2">Halaman 2</a></p> <p><a href="latihan03.php?pg=p3">halaman 3</a></p>

    <?php
    echo $konten;
    ?> 
</body>
</html>