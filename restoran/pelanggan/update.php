<?php

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $row = $db->getITEM("SELECT * FROM tblpelanggan WHERE idpelanggan = $id");
        
        if ($row['Aktif']==0) {
            $Aktif = 1;
        } else {
            $Aktif = 0;
        }

        $sql = "UPDATE tblpelanggan SET Aktif=$Aktif WHERE idpelanggan=$id";
        $db->runSQL($sql);

        header("location: ?f=pelanggan&m=select");
    }

?>