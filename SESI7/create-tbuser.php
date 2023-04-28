<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY, 
        nama VARCHAR(255), 
        email VARCHAR(255), 
        username VARCHAR(255), 
        passkey VARCHAR(255), 
        id_user VARCHAR (255)
    );";
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS Mysql
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        echo "Koneksi ke DBMS Mysql Sukses<br>";
        $hsl = mysqli_query($cnn, $s_db);
        if($hsl){
            echo "Membuat Tabel tbUSER Sukses<br>";
        }else{
            echo "Membuat Tabel tbUSER Gagal<br>";
        }

    }else{
        echo "Koneksi ke DBMS Mysql Gagal<br>";
    }