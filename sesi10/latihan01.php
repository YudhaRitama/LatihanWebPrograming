<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <form name="Latitan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>
        <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="txJKEL" name="JKEL" value="Laki_laki">Laki-Laki
            <input type="radio" id="txJKEL" name="JKEL" value="Perempuan">Perempuan
        </div>
        <div>
            Jurusan
            <select name="JURUSAN" id="txJUR">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DKV">DKV</option>
            <option value="TIPAR">TIPAR</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="hobi_1">Rebahan
            <input type="checkbox" name="hobi_2">Menghalu
            <input type="checkbox" name="hobi_3">Play StarRail
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
        
    </form>

    <script>
        function checkform(frm){
            let F = frm.elements; 
            let nim = F.namedItem("NIM").value;
            let nama = F.namedItem("NAMA").value;
            let jkel = F.namedItem("JKEL").value;
            let jurusan = F.namedItem("JURUSAN").value;
            let H1 = F.namedItem("hobi_1").checked;
            let H2 = F.namedItem("hobi_2").checked;
            let H3 = F.namedItem("hobi_3").checked;

            console.log("NIM : "+nim);
            console.log("NAMA : "+nama);
            console.log("Jenis Kelamin : "+jkel);
            console.log("Jurusan : "+jurusan);
            console.log("HOBI : "+H1);
            console.log("HOBI : "+H2);
            console.log("HOBI : "+H3);
            return false;
        }
    </script>
</body>
</html>