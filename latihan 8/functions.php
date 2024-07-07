<?php 
        // koneksi ke database
        $conn = mysqli_connect("localhost" , "root","","latihan_php") ;

        
        function query($query) {
            global $conn ; 

            // koneksi ke table
            $result = mysqli_query($conn,$query) ;

            //tempat menyimpan semua data yang ada di table mahasiswa
            $t_mahasiswa = [] ;

            // perulangan untuk mengambil data
            while ($mhs = mysqli_fetch_assoc($result)) {
                $t_mahasiswa[] = $mhs ;
            }
            return $t_mahasiswa ; 
        }
?>