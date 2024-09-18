<?php
    require_once "../function.php";



    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    echo $sql;

    header("Location:http://localhost/Tugas-Video-PHP/restoran/kategori/select.php");


?>