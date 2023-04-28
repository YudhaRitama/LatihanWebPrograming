<?php
    include("konfigurasi.php");

    $s_db = "CREATE DATABASE ".DBNAME;
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS Mysql
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){
        echo "Koneksi ke DBMS Mysql Sukses<br>";
        $hsl = mysqli_query($cnn, $s_db);
        if($hsl){
            echo "Membuat DATABASE ".DBNAME." Sukses<br>";
        }else{
            echo "Membuat DATABASE ".DBNAME." Gagal<br>";
        }

    }else{
        echo "Koneksi ke DBMS Mysql Gagal<br>";
    }