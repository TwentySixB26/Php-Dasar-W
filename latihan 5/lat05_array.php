<!-- ======================= ARRAY ====================== -->
<!-- untuk menampilkan semua array mengunakan :
1. var_dump() 
2. print_r  
kecuali menampilkan satu isi array baru bisa pakai echo
-->

<?php
    $hari = array("senin" , "selasa" , "rabu" , "kamis") ; 
    $bulan = ["januari" , "februari" , "maret" ,"april"] ; 
    $array = ["bayu", 26 , true];
    
    var_dump($hari) ; 
    echo "</br>" ;

    print_r($bulan) ;
    echo "</br>" ;
    // menambahkan elemen baru di array 
    $bulan[] = "mei" ; 
    $bulan[] = "juni" ; 
    print_r($bulan) ;
    echo "</br>" ;

    echo $array[2] ;
    echo "</br>" ;
?>
