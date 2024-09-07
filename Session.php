<nav>

    <ul>
        <li><a href="?menu=Isi">Isi</a></li>
        <li><a href="?menu=Hapus">Hapus</a></li>
        <li><a href="?menu=Destroy">Destroy</a></li>
    </ul>

</nav>


<?php

    session_start();

    var_dump($_SESSION);

    echo "<br>";

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;
        
        switch ($menu) {
            case 'Isi':
                IsiSession();
                break;
            case 'Hapus':
                unset($_SESSION['user']);
                break;
            case 'Destroy':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }


    function IsiSession() {
        $_SESSION['user'] = 'Raka';
        $_SESSION['nama'] = 'Raka Sigma';
        $_SESSION['alamat'] = 'Porong';
    }