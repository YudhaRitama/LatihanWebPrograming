<?php
    $dta ["NIM"] = "1122334455";
    $dta ["NAMA"] = "Putu Lacur";
    $dta ["ALAMAT"] = "Isekai";
    $dta ["TGLL"] = "2023-05-26";
    $dta ["JURUSAN"] = "Teknik Informasi";
    $dta ["JKEL"] = "L";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);