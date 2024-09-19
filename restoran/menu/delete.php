<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE  FROM tblmenu WHERE idmenu = $id";
        // echo $sql;

        $db->runSQL($sql);
        header("Location: ?f=menu&m=select");
    }


?>