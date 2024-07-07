<?php

    sleep(1) ; 
    //agar terhubung dengan file functions
    require '../functions.php' ; 

    $keyword = $_GET["keyword"] ; 
    $query = "SELECT * FROM mahasiswa WHERE 
                        nama LIKE '%$keyword%' OR
                        nim LIKE '%$keyword%' OR
                        jurusan LIKE '%$keyword%' OR
                        email LIKE '%$keyword%'"  ; 
    $mahasiswa = query($query) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>