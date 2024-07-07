<?php 
        // koneksi ke database
        $conn = mysqli_connect("localhost" , "root","","latihan_php") ;

        
        function query($query) {
            global $conn ; 

            // mengambil data dari table
            $result = mysqli_query($conn,$query) ;

            $t_mahasiswa = [] ;
            while ($mhs = mysqli_fetch_assoc($result)) {
                $t_mahasiswa[] = $mhs ;
            }
            return $t_mahasiswa ; 
        }

        function tambah($_data) {
            global $conn ;
            
            $nama = htmlspecialchars($_data["nama"]) ;
            $nim  = htmlspecialchars($_data["nim"]) ;
            $email = htmlspecialchars($_data["email"])  ;
            $jurusan = htmlspecialchars($_data["jurusan"]) ; 
            $gambar = htmlspecialchars($_data["gambar"]) ; 


            //mengambil query
            // jika kita diharuskan mengunakan petik("" atau '' ) lebih dari dua kali 
            //maka petik tersebut tidak boleh digunakan lagi,contohnya seperti yang dibawah
            $query = " INSERT INTO mahasiswa VALUES 
            ('','$nama','$nim','$email' , '$jurusan' , '$gambar') " ; 

            //memasukan data ke dalam database
            $result = mysqli_query($conn,$query) ;

            //mengecek apakah data yang dimasukan eror atau tidak 
            return mysqli_affected_rows($conn);
        }


        function hapus($data) {
            // hubungkan dengan database 
            global $conn ;
            
            //menghapus data
            $result = mysqli_query($conn,"DELETE FROM mahasiswa where id = $data ") ;

            //mengecek apakah data yang dimasukan eror atau tidak 
            return mysqli_affected_rows($conn);
        }

        function ubah($data) {
            global $conn ;
            
            $id = $data["id"] ; 
            $nama = htmlspecialchars($data["nama"]) ;
            $nim  = htmlspecialchars($data["nim"]) ;
            $email = htmlspecialchars($data["email"])  ;
            $jurusan = htmlspecialchars($data["jurusan"]) ; 
            $gambar = htmlspecialchars($data["gambar"]) ; 


            //mengambil query
            // jika kita diharuskan mengunakan petik("" atau '' ) lebih dari dua kali 
            //maka petik tersebut tidak boleh digunakan lagi,contohnya seperti yang dibawah
            $query = "UPDATE mahasiswa SET 
                        nama = '$nama' , 
                        nim = '$nim',
                        email = '$email',
                        jurusan = '$jurusan', 
                        gambar = '$gambar'
                        WHERE id = $id 
                    " ; 

            //memasukan data ke dalam database
            $result = mysqli_query($conn,$query) ;

            //mengecek apakah data yang dimasukan eror atau tidak 
            return mysqli_affected_rows($conn);
        }

        function cari($data) {
            $query = "SELECT * FROM mahasiswa WHERE 
                        nama LIKE '%$data%' OR
                        nim LIKE '%$data%' OR
                        jurusan LIKE '%$data%' OR
                        email LIKE '%$data%'
                    " ;
            return query($query) ; 
        }
?>