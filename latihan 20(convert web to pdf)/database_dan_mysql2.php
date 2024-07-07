<?php
    session_start() ; 
    if (isset($_SESSION["login"]) === false ) {
        header("Location: login.php") ; 
        exit ; 
    }

    //agar terhubung dengan file functions
    require 'functions.php' ; 

    // kumpulan array yang berisi data mahasiswa yang telah diconvert dari functions
    $mahasiswa = query("SELECT * FROM mahasiswa ") ;

    if (isset($_POST["submit"])) {
        $mahasiswa = cari($_POST["keyword"]) ; 
        
    } ; 

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


<!-- ada dua cara untuk melakukan print 
1. mengunakan media print 
2. mengunakan mpdf  -->
<!-- jika mengunakan mpdf cek pada file print.php  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .loader {
            width: 21px;
            position: absolute;
            top :150px;
            left : 385px;
            z-index: -1;
            display:none;
        }
        a{
            text-decoration:none; 
            color:black;
        }

        @media print {
            .logout, .cetak , .tambahData {
                display:none ; 
            }
        }
    </style>
</head>
<body>
    <h1>Daftar Nama</h1>
    <a href="logout.php" class="logout"> Keluar </a> | <a href="print.php" class="cetak" target="_blank" >Cetak</a>
    <br>
    <a href="tambahData.php" clas="tambahData">Tambahkan data</a>
    <br> <br> <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" placeholder="Search" size="50" id="keyword">
        <button type="submit" name="submit" id="tombolCari"> Cari Data</button>
        <img src="loader.gif" alt="" class='loader'>
    </form>
    
    <br> 
    <div id="container">
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
                        <a href="edit.php?id=<?php echo $mhs["id"] ?>"> 
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
    </div>

    <script src="jquery-3.7.1.js"></script>
    <script src="script.js"></script>
</body>
</html>