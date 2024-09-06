<?php

 //ARRAY DIMENSI

    // $nama = array("Raka", "Darma", "Bagus", "Surya", "Reyno", "Ryan", "Rafi", 10, 1.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 9; $i++) { 
    //     // echo $i;
    //     echo "<br>";
    //     echo $nama[$i];
    // }

    // foreach ($nama as $kunci) {
    //     echo $kunci. "<br>";
    // }

    //ARRAY ASOSIATIF

    // $nama = array (
    //     "Raka" => "Porong",
    //     "Bagus" => "Jakarta",
    //     "Darma" => "Sidoarjo",
    //     "Surya" => "Papua",
    //     "Reyno" => "Nigeria",
    //     "Ryan" => "Surabaya",
    //     "Rafi" => "Sukodono"
    // );

    $nama["Raka"]="Porong";
    $nama["Bagus"]="Jakarta";
    $nama["Darma"]="Sidoarjo";
    $nama["Surya"]="Papua";
    $nama["Reyno"]="Nigeria";
    $nama["Ryan"]="Surabaya";
    $nama["Rafi"]="Sukodono";



    var_dump($nama);

    echo "<br>";

    // echo $nama["Rafi"];

    foreach ($nama as $key => $value) {
        echo $key. " Tinggal di ".$value;

        echo "<br>";
    }



?>