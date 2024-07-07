<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost" , "root","","latihan_php") ;

    // mengambil data dari table
    $result = mysqli_query($conn,"SELECT * FROM mahasiswa ") ;

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
        <?php while ($mhs = mysqli_fetch_assoc($result) ) :?>
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="">hapus</a> | <a href="">edit</a>
                </td>
                <td> <?php echo $mhs["nama"] ; ?> </td>
                <td><?php echo $mhs["nim"] ; ?></td>
                <td><?php echo $mhs["email"] ; ?></td>
                <td><?php echo $mhs["jurusan"] ; ?></td>
                <td><img src="../img/<?php echo $mhs["gambar"] ?>" alt="" style="width:100px ;" ></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>