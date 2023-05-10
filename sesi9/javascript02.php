<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
    <div id="pesan"></div>
    <span id="pesan2"></span>

    <script>
        document.write("Tampilkan Teks Saja"); 
        document.write("<br> <strong>TERSERAH</strong> Tulisannya Apa");
        document.getElementById("pesan").innerHTML = "<sup>Apa</sup> Saja Boleh";
        document.getElementById("pesan2").innerHTML = "Silahkan Dicoba <br>";
    </script>
   
</body>
</html>