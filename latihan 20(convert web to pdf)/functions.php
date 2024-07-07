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
        
            // cek apakah lolos upload tidak 
            $gambar = upload() ; 
            if ($gambar === false ) {
                return false ; 
            }

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


        function upload() {
            $fileName = $_FILES["gambar"]['name'];
            $fileTmpName = $_FILES["gambar"]['tmp_name'];
            $fileSize = $_FILES["gambar"]['size'];
            $fileError = $_FILES["gambar"]['error'];

            //========= cek ada file yang dikirim pada form tidak ========
            if ($fileError === 4) {
                echo '<script>
                        alert("tolong masukan gambar");
                    </script>';

                return false ; 
            }

            //======== cek apakah gambar atau file yang lain yang di kirim ========
            $ekstensiFileValid = ["png","jpg","jpng"] ;
            //explode untuk memecah contoh nama file : bayu.jpg maka menjadi ['bayu', 'jpg'] 
            $ambilEkstensiFile =  explode('.' , $fileName) ; 
            //end untuk mengambil nilai paling terakhir
            //strtolower digunakan untuk membuat teks menjadi kecil 
            $ekstensiFile =  strtolower(end($ambilEkstensiFile)); 
            if (in_array($ekstensiFile , $ekstensiFileValid) == false ) {
                echo '<script>
                        alert("tolong masukan file gambar (png,jpeg,jpg) ");
                    </script>';
                return false ; 
            }


            // cek batas maksimum foto 
            if ($fileSize === 3000000) {
                echo '<script>
                        alert("size foto hanya boleh berukuran 5MB ");
                    </script>';
                return false ; 
            }

            //jika lolos cek 
            $namaFileBaru = uniqid() ; 
            $namaFileBaru= $namaFileBaru. '.' . $ekstensiFile ; 
            move_uploaded_file($fileTmpName,'../img/' . $namaFileBaru) ;
            return $namaFileBaru ; 
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
           

            if ($_FILES["gambar"]['error'] == 4) {
                $gambar = $data["gambarLama"] ; 
            } else {
                $gambar = upload() ; 
                if ($gambar == false ) {
                    $gambar = $data["gambarLama"] ; 

                }
            }


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

        function registrasi($data){
            global $conn ; 
            $username = htmlspecialchars(strtolower(stripslashes($data["username"]))) ;
            $password = mysqli_real_escape_string($conn,$data["password"]) ;
            $password2 = mysqli_real_escape_string($conn,$data["password2"]) ;


            // cek apakah password pertama dengan kedua sesuai tidak 
            if ($password !== $password2) {
                echo    '<script>
                            alert("password yang anda konfirmasikan salah!");
                        </script>';
                return false ; 
            }

            //cek apakah ada username yang sudah terdaftar tidak
            $queryCek = "SELECT * FROM registrasi WHERE username ='$username' " ; 
            $resultCek = mysqli_query($conn,$queryCek) ;


            if (mysqli_affected_rows($conn) > 0) {
                echo    '<script>
                            alert("username yang anda masukan telah ada!");
                        </script>';
                return false ; 
            }

            // ekripsi password 
            $passwordNew = password_hash($password,PASSWORD_DEFAULT) ; 


            $query = " INSERT INTO registrasi VALUES 
            ('','$username','$passwordNew') " ; 

            //memasukan data ke dalam database
            $result = mysqli_query($conn,$query) ;

            //mengecek apakah data yang dimasukan eror atau tidak 
            return mysqli_affected_rows($conn);
        }


        function login($data) {
            global $conn ;
            $username = $data["username"] ; 
            $password = $data["password"] ; 
    
            $query = "SELECT * FROM registrasi WHERE username = '$username' " ; 
            $result = mysqli_query($conn,$query) ;

            // cek username apakah ada didatabase tidak 
            if (mysqli_affected_rows($conn) > 0 ) {
                // cek apakah password benar atau tidak 
                $hasil2 = mysqli_fetch_assoc($result) ; 
                if (password_verify($password,$hasil2["password"]) ) {

                    // cek cookie
                    if (isset($_POST["remember"])) {
                        setcookie('id' , $hasil2["id"], time() + 60) ;
                        setcookie('user' ,hash('sha256' ,  $hasil2["username"]), time() + 60) ;
                    }
                    // cek sesion 
                    $_SESSION["login"] = true ; 
                    return true ; 
                }  else {
                    echo    '<script>
                                alert("password anda salah! ");
                            </script>';
                }
            } else {
                echo '<script>
                        alert("username anda tidak terdaftar! ");
                    </script>';
            }
            return false ; 

        } ; 
?>