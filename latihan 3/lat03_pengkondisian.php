<!-- Pengkondisian  -->
<!--    1. if 
        2. else 
        3. else if 
        4. ternary 
        5. switch  
-->


<?php
    $a = 20 ;
    // if ($a < 20) {
    //     echo "Benar" ;
    // } else if ($a == 20) {
    //     echo "binggo" ; 
    // }
    // else {
    //     echo "salah" ; 
    // }


    // ================= Ternary ============
    // $b = ($a < 20) ? "Benar" : "salah" ; 
    // echo $b ;


    //================= switch ==============
    switch ($a) {
        case ($a < 20):
            echo "benar" ;
            break;
        case ($a == 20) :
            echo "Binggo!!" ;
            break ;
        default:
            echo "salah" ; 
            break;
    }
?>