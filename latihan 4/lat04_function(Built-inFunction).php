
<!-- ================   1. date : ============
l = hari 
m = bulan Pakai angka 
M = bulan
d = tanggal  -->
<?php 
    // echo date("Y") ; 
    // echo date("l , d-M-Y") ; 
?>



<!-- ==================== 2.time ===================== -->
<!-- detik yang sudah berlalu sejak 1 januari 1970  -->
<?php 
    // echo time() ;

    //menghitung 2 hari kedepan 
    // echo date("l" , time()+ 60*60*24*2) ; 
?>




<!-- ======================= 3.mktime ===================== -->
<!-- membuat detik sendiri  -->
<!-- mktime(0,0,0,0,0,0)  -->
<!-- jam , menit , detik , bulan , tanggal , tahun -->
<?php 
    // echo mktime(0,0,0,1,7,2004) ; 
    // echo date("l", mktime(0,0,0,1,7,2004)) ; 
?>




<!-- =================== 4.strtotime =================== -->
<!-- hampir mirip dengan mktime  -->
<?php
    // echo date("l" , strtotime("7 jan 2004")) ;
?>




<!-- ==================== 5.strlen ============ -->
<!-- untuk menghitung banyaknya string  -->
<?php
    // $a = "Bayu Aji" ;
    // echo $hitung = strlen($a) ;
?>




<!-- ============== 6.strcmp =============== -->
<!-- untuk membandingkan dua buah string  -->
<?php
    // $str1 = "hello" ; //11111
    // $str2 = "Hello" ; //01111
    // $hasil = strcmp($str1 , $str2) ;

    // jika yang pertama jauh lebih besar hasilnya 1 
    // jika yang kedua jauh lebih besar hasilnya -1 
    // jika pertama dan kedua sama hasilnya 0 
    
    // echo "$hasil" ;
?>





<!-- ====================== 7.explode ==================== -->
<!-- membuat string menjadi array  -->
<?php
    // $nama = "bayu aji nugroho namanya itu aja" ; 
    // $hasil = explode(" " , $nama) ; 

    // echo $hasil[5] ;  
?>




<!-- ================= 8.htmlspecialchars ================ -->
<!-- mengkonversi character khusus menjadi entitas html  -->
<?php
    // $html_string = "<h1>Hello, world!</h1>";
    // $escaped_string = htmlspecialchars($html_string);

    // echo "String HTML: " . $html_string . "<br>";
    // echo "Hasil htmlspecialchars(): " . $escaped_string;
?>








<!-- ================ 9.var dump ======================= -->
<!-- menampilkan isi dan tipe data dari sebuah variabel  -->
<?php
    // $nama = "bayu" ; 
    // $umur = 20 ; 
    // $hobi = array("makan","main game","tidur") ; 


    // var_dump($nama) ; 
    // echo "</br>" ;

    // var_dump($hobi) ; 
    // echo "</br>" ;

    // var_dump($umur) ; 
    // echo "</br>" ;
?>






<!-- ========================= 10.isset ========================= -->
<!-- isset — Menentukan apakah suatu variabel dideklarasikan atau tidak dan isinya NULL atau tidak, isset 
akan mengembalikan nilai boolean -->
<?php
    // Contoh variabel
    // $var1 = 5;
    // $var2 = null;
    // $var3 = "Hello";

    // Mengecek apakah variabel telah di-set menggunakan isset()
    // echo "Apakah var1 di-set? ";
    // var_dump(isset($var1)); // Output: bool(true)
    // echo "</br>" ;

    // echo "Apakah var2 di-set? ";
    // var_dump(isset($var2)); // Output: bool(false)
    // echo "</br>" ;

    // echo "Apakah var3 di-set? ";
    // var_dump(isset($var3)); // Output: bool(true)
    // echo "</br>" ;

    // echo "Apakah var4 di-set? ";
    // var_dump(isset($var4)); // Output: bool(false) karena var4 tidak didefinisikan sebelumnya
    // echo "</br>" ;
?>






<!-- ================================ 11.empty ===================== -->
<!-- mengecek apakah suatu variabel bernilai kosong atau ada isinya tidak, dan akan mengembalikan nilai true jika
variabel tersebut bernilai kosong dan jika variabel ada isinya atau tidak bernilai kosong maka akan mengembalikan 
nilai boolean berupa false, Sebuah variabel dianggap "kosong" jika:
1.Nilainya adalah false.
2.Nilainya adalah 0 (nol) atau '0' (nol dalam bentuk string).
3.Nilainya adalah array kosong [] atau string kosong ''.
4.Variabel tidak didefinisikan sama sekali. -->

<?php
    // $var1 = 0;
    // $var2 = '';
    // $var3 = false;
    // $var4 = null;
    // $var5 = "Hello";
    // $var6 = array();

    // var_dump(empty($var1)) ;
    // echo "</br>" ;

    // var_dump(empty($var2)) ;
    // echo "</br>" ;

    // var_dump(empty($var3)) ;
    // echo "</br>" ;

    // var_dump(empty($var4)) ;
    // echo "</br>" ;

    // var_dump(empty($var5)) ;
    // echo "</br>" ;

    // var_dump(empty($var6)) ;
    // echo "</br>" ;
?>





<!-- ================= 12. die ================ -->
<!-- Keluarkan pesan dan hentikan skrip saat ini jika file tidak dapat dibaca  -->
<?php
    // $file1 = "cat.html";     // file bisa di baca atau file nya ada
    // $file2 = "cat.txt" ;     //file tidak bisa dibaca atau file nya tidak ada 

    // Mengecek apakah file.txt dapat dibaca
    // if (!is_readable($file2)) {
    //     die("File tidak dapat dibaca.");
    // }

    // Eksekusi jika file dapat dibaca
    // echo file_get_contents($file2); 
?>





<!-- ========================= 13.sleep =================== -->
<!-- menunggu beberapa waktu sebelum code dieksekusi,satuan sleep adalah second/detik  -->
<?php
    // echo "hallo </br>" ;
    // sleep(3) ; 
    // echo "nama saya bayu" ;
?>