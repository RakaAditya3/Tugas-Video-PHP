<?php

    
    
    function belajar(){
        echo "Saya Sinau PHP";
    }

    function luasPersegi($p= 50, $l = 3 ){
        $luas = $p * $l;
        echo $luas;
    }

    function luas($p = 5, $l = 3) {
        $luas = $p * $l;
        return $luas;
    }

    function output(){
        return "Sinau Function";
    }

    echo luas(50,5) + 1;

    echo "<br>";

    echo output();
?>