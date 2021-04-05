<?php

function pagar_bintang($integer){
    for($a = 1; $a <= $integer; $a++){
        if($a % 2 == 1){
            for($i = 1; $i <= $integer; $i++){
                echo "#";
            }
        } else {
            for($i = 1; $i <= $integer; $i++){
                echo "*";
            }
        }
        echo '<br>';
    }
    echo '<br>';
}

echo pagar_bintang(5);
echo pagar_bintang(8);
echo pagar_bintang(10);

?>