<?php
    $dta [0] ["NIM"] = "1122334455";
    $dta [0] ["NAMA"] = "Putu Lacur";
    $dta [0] ["ALAMAT"] = "Isekai";
    $dta [0] ["TGLL"] = "2023-05-26";
    $dta [0] ["JURUSAN"] = "Teknik Informasi";
    $dta [0] ["JKEL"] = "L";

    $dta [1] ["NIM"] = "2233445566";
    $dta [1] ["NAMA"] = "Putu Sebet";
    $dta [1] ["ALAMAT"] = "Karang Taruna";
    $dta [1] ["TGLL"] = "2023-05-27";
    $dta [1] ["JURUSAN"] = "Desain Grafis";
    $dta [1] ["JKEL"] = "P";

    $dta [2] ["NIM"] = "3344556677";
    $dta [2] ["NAMA"] = "Putu Bahagia";
    $dta [2] ["ALAMAT"] = "Karang Anyar";
    $dta [2] ["TGLL"] = "2023-05-28";
    $dta [2] ["JURUSAN"] = "Desain Visual";
    $dta [2] ["JKEL"] = "L";

    $dta [3] ["NIM"] = "4455667788";
    $dta [3] ["NAMA"] = "Putu Ceria";
    $dta [3] ["ALAMAT"] = "Karang Boma";
    $dta [3] ["TGLL"] = "2023-05-29";
    $dta [3] ["JURUSAN"] = "Bisnis Digital";
    $dta [3] ["JKEL"] = "P";

    $dta [4] ["NIM"] = "5566778899";
    $dta [4] ["NAMA"] = "Putu Liang";
    $dta [4] ["ALAMAT"] = "Karang Katos";
    $dta [4] ["TGLL"] = "2023-05-29";
    $dta [4] ["JURUSAN"] = "Manajemen Teknologi";
    $dta [4] ["JKEL"] = "L";



    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);