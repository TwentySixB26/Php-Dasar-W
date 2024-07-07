<?php

    //agar terhubung dengan file functions
    require 'functions.php' ; 

    // kumpulan array yang berisi data mahasiswa yang telah diconvert dari functions
    $mahasiswa = query("SELECT * FROM mahasiswa") ;

    // cara mengambil data 
    // mysqli_fetch_row() //digunakan untuk mengambil data berbasis mengunakan index numerik
    // mysqli_fetch_assoc() //digunakan untuk mengambik data mengunakan index asscosiative
    // mysqli_fetch_array() //mengunakan keduanya
    // mysqli_fetch_object() // mengunakan object

    // paling disarankan mengunakan row atau assoc


    // menampilkan isi data, TAPI HANYA SATU YAITU DATA YANG PALING ATAS 
    // $mhs = mysqli_fetch_assoc($result) ;
    // var_dump($mhs) ; 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Nama</h1>

    <a href="tambahData.php">Tambahkan data</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $mhs) :?>
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="hapusdata.php?id=<?php echo $mhs["id"] ?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> 
                        hapus
                    </a> | 
                    <a href=""> 
                        edit
                    </a>
                </td>
                <td> <?php echo $mhs["nama"] ; ?> </td>
                <td><?php echo $mhs["nim"] ; ?></td>
                <td><?php echo $mhs["email"] ; ?></td>
                <td><?php echo $mhs["jurusan"] ; ?></td>
                <td><img src="../img/<?php echo $mhs["gambar"] ?>" alt="" style="width:100px ;" ></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>