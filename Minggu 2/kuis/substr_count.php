<?php
function xo($str) {
    $x = substr_count($str, "x");
    $o = substr_count($str, "o");

    if($x == $o){
        echo "Output xo dari $str = Benar (Jumlah x dan o sama)<br>";
    } else {
        echo "Output xo dari $str = Salah (Jumlah x dan o tidak sama)<br>";
    }
}

// Test Cases
echo xo('xoxoxo'); // "Benar"
echo xo('oxooxo'); // "Salah"
echo xo('oxo'); // "Salah"
echo xo('xxooox'); // "Benar"
echo xo('xoxooxxo'); // "Benar"
?>