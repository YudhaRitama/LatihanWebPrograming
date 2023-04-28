<?php
    function registerUSER($nama, $email, $user, $pass){
        $psn = "Inser Data Gagal";
        $id_user = md5($email);
        $sql ="INSERT INTO tbuser(nama, email, username, passkey, id_user) VALUES('$nama','$email','$user','$pass','$id_user');";
        $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
        if($cnn){
            $hsl = mysqli_query($cnn, $sql);
            if($hsl){
                $psn = "Insert Data Sukses";
            }
        }
        return $psn;
    }