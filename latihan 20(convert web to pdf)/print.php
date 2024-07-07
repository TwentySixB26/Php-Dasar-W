<!-- cara instal mpdf  -->
<!-- instal ekstensi ini : 
$ composer require mpdf/mpdf -->


<?php

require_once __DIR__ . '/vendor/autoload.php';
 //agar terhubung dengan file functions
 require 'functions.php' ; 

 // kumpulan array yang berisi data mahasiswa yang telah diconvert dari functions
 $mahasiswa = query("SELECT * FROM mahasiswa ") ;


$print = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Nama</h1>

    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>ID</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
        </tr>' ;

$i = 1  ;
foreach($mahasiswa as $mhs) {
        $print .= '<tr> 
                        <td>' .  $i  . '</td>
                        <td> ' . $mhs["nama"] . '</td>
                        <td>' . $mhs["nim"]   . '</td>
                        <td>' . $mhs["email"]   . '</td>
                        <td>' . $mhs["jurusan"]   . '</td>
                        <td>' . '<img src="../img/' . $mhs["gambar"] . '" style="width:100px ;"> </td> 
                    </tr>' ; 

    $i++ ;
    }

$print .= ' </table>
</body>
</html>' ;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($print);
$mpdf->Output('member jkt.pdf' , 'I');

// untuk menganti nama default saat di unduh
// $mpdf->Output('nama file.pdf' , 'D' atau 'I');
// D untuk langsung unduh atau download 
// I untuk di review 
?>
