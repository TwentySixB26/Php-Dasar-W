<?php 
    //agar terhubung dengan file functions
    require 'functions.php' ; 
    $id = $_GET["id"] ; 

    if (hapus($id) > 0) {
        echo '<script>
                alert("sukses dihapus");
                document.location.href = "database_dan_mysql2.php";
            </script>';
    } else {
        echo '<script>
                alert("maaf data gagal dihapus");
                document.location.href = "database_dan_mysql2.php";
            </script>';
    } 
?> 