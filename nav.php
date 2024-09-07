<nav>
    <ul>
        <li> <a href="?menu=Home">Home</a></li>
        <li> <a href="?menu=About">About</a> </li>
        <li> <a href="?menu=Jurusan">Jurusan</a></li>
    </ul>
</nav>

<?php

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        require_once $menu.'.php';
    }



?>