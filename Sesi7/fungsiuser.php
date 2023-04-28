<?php

    Function registerUSER ($nama, $email, $user, $pass){
        $psn = "Insert Data Gagal";
        $iduser = md5($email);
        $sql = "INSERT INTO tbuser(nama,email,username,passkey,iduser)

            VALUES(
                '$nama',
                '$email',
                '$user',
                '$pass',
                '$iduser'

             );";
     $scnn =mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);
     IF($scnn){
           $hsl = mysqli_query ($scnn, $sql);
           if($hsl){

                $psn = "Insert Data Sukes";
           } 
     }
     return $psn;
    }