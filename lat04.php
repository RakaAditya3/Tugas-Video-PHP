<?php

    //OPERATOR MATEMATIKA

    $a = 10;
    $b = 9;

    $c = $a + $b;

    echo $c;

    echo "<br>";

    $c = $a - $b;
    echo $c.'<br>';

    $c = $a * $b;
    echo $c.'<br>';

    $c = $a / $b;
    echo round($c).'<br>';

    $c = $a % $b;
    echo $c.'<br>';

    //OPERATOR LOGIKA
    $c = $a < $b;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c.'<br>';

    //INCREMENT

    $a--;
    echo $a.'<br>';

    //OPERATOR STRING

    $kata = "Surya";
    $kota = " Setiawan";

    $hasil = $kata.$kota;
    $hasil .= ' Nugroho';
    echo $hasil;
?>