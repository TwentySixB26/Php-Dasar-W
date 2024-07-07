<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- standar output  -->
    <!-- 1. echo dan print ===> digunakan untuk menampilkan sesuatu ke layar 
    2. print_r ======> digunakan untuk mencetak isi array 
    3. var_dump =====> digunakan untuk melihat isi dari variabel/muncul informasi tentang itu 
    print_r dan var_dump digunakan untuk debuging  -->
    
    <?php
        echo 'ini mengunakan echo <br>' ; 
        print 'ini dibuat dengan print <br>' ;
        var_dump('ini var_dump') ; 
    ?>


    <!-- =================================================================== -->
    <!-- variabel dan tipe data  -->
    <!-- 
        1. variabel  
        variabel digunakan untuk mendifinisikan sebuah data 
        tanda variabel adalah $ contoh :
        $nama = 'bayu'
    -->
    <h1>
        <?php
            $nama = 'Bayu' ;
            echo $nama ; 
        ?>
    </h1>



    <!-- =================================================================== -->
    <!--    operator
        1. aritmatika (+ - / * %)   
        2. pengabung string atau concat ( . )
        3. Assignment (= , += , -= , /= , *=, %= , .=)
        4. Perbandingan (< , > , <= , >= , == , !=)
        5. Identitas (=== , !===)
        6. Logika (&& , || , !)
    -->
    <?php
        // 1. aritmatika 
        // $x = 10 ; 
        // $y = 10 ; 
        // echo $x + $y ;

        
        // 2. concat 
        // $nDepan = ' bayu ' ;
        // $nBelakang = 'aji' ;
        // echo $nDepan . $nBelakang ; 

        // 3. Assigment 
        // $x = 1 ;
        // $x -= 9 ;
        // echo $x ; 


        // 4. perbandingan 
        // var_dump(1 > 5 ) ; 
        // var_dump( 1 == '1') ; 
        //perbandingan tidak mengecek tipe data hanya mengecek isi nilai

        // 5. identitas 
        // var_dump(1 === '1') ; 

        // 6. LOgika 
        $x = 30 ;
        var_dump( ($x < 20) || ($x % 2 == 0) ) ;
    ?>


    
</body>
</html>