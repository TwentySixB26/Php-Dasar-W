<?php
    $mahasiswa = ["nama" =>"bayu" ,"nim" => 2203040039 ,"prodi" => "teknik informatika" ,"email" => "bayu@gmail.com","tugas" => [90,91,92]] ; 
echo $mahasiswa["tugas"][1] ;
echo "</br>" ; 

    foreach($mahasiswa as $m) {
        if ($mahasiswa["tugas"] == $m) {
            $nilai = $mahasiswa["tugas"] ; 
            foreach($nilai as $n) {
                echo $n ; 
                echo "</br>" ;
            }
        } else {
            echo $m ; 
            echo "</br>" ;     
        }
        

    }
?>

