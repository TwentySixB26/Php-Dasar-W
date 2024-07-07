<!-- ========= SUPERGLOBALS =========== 
                1. $_GET
                2. $_POST
                3. $_REQUEST
                4. $_SESSION
                5. $_SERVER
                6. $_COOKIE
                7. $_ENV 
Perbedaan GET dan Post adalah Get akan tampil didalam url sedangkan post tidak,post bekerja dibalik layar 
-->

<!-- ========= Redirecit ==========
berfungsi untuk kembali ke halaman sebelumnya inilah syntax nya : -->
<!-- header("Location: alamat_yang_dituju ") ;
exit ;  -->

<?php
    // 1. ngisi lewat google/link 
    // http://localhost/myFolder/LatihanPHP/lat07_GET_POST.php?nama=Bayu%20aji&nim=2203040039

    // 2. ngisi lewat codingan 
    // $_GET["nama"] = "nugroho" ;
    // $_GET["nrp"] = "1503304" ;
    // var_dump($_GET) ; 
?>



<!-- ============================================================================================================ -->
<?php
    $jkts = [
        ["img" => "oniel.jpg" ,"nama" => 'Oniel' , "gen" => "8" , "zodiak" => "Leo
        " ,"email" => "oniel@yahoo.com"] ,
        ["img" => "olla.jpg" ,"nama" => 'Olla' , "gen" => "7" , "zodiak" => "Pisces
        " ,"email" => "olla@yahoo.com"]
    ] ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mem JKT48</h1>
    
    <ul>
        <?php foreach($jkts as $jkt): ?>
            <li>
                <a href="latihan1.php?nama=<?php echo $jkt["nama"]; ?>&img=<?php echo $jkt["img"] ; ?>&gen=<?php echo $jkt["gen"] ;?>&zodiak=<?php echo $jkt["zodiak"] ;?>&email=<?php echo $jkt["email"] ;?>">
                    <?php echo $jkt["nama"] ;?>
                </a>
            </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>