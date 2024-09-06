<?php

    // $nama = array("Raka", "Darma", "Bagus", "Surya", "Reyno", "Ryan", "Rafi");

    // var_dump($nama);

    // echo "<br>";

    // foreach ($nama as $key) {
    //     echo $key;
    //     echo "<br>";
    // }

    $nama = array(
        "Raka" => "Porong",
        "Bagus" => "Jakarta",
        "Darma" => "Sidoarjo",
        "Surya" => "Papua",
        "Reyno" => "Nigeria",
        "Ryan" => "Surabaya",
        "Rafi" => "Sukodono"
    );

    var_dump($nama);
    echo "<br>";
    foreach ($nama as $kunci => $variabel) {
        echo $kunci. '- '. $variabel;
        echo "<br>";
    }



?>