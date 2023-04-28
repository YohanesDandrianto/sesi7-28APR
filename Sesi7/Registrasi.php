<?php
      include ("konfigurasi.php");
      include("fungsiuser.php");

    if(isset($_POST["txNAMA"])){

        if($_POST["txPASS1"] == $_POST ["txPASS2"]){

            $Nama = $_POST["txNAMA"];
            $Email = $_POST["txEmail"] ;
            $User = $_POST["txUser"];
            $pass= $_POST["txPASS1"];
            $pass = $_POST["txPASS1"];
            $psn = registerUSER ($Nama, $Email, $User, $pass);

        }

       
    }
       
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method = "POST" action = "Registrasi.php">
    
      <div>
        Nama Lengkap
        <input type="text" name="txNAMA">
      </div>
      <div>
         Email
        <input type="text" name="txEmail">
      </div>
      <div>
        User Name
        <input type="text" name="txUser">
      </div>
      <div>
       Password
        <input type="Password" name="txPASS1">
      </div>
      <div>
       Verifikasi Password
        <input type="Password" name="txPASS2">
      </div>
      <div>
        <button type= "submit"> Registrasi</button>
      </div>

</form>


</body>
</html>