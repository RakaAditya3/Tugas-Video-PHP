<?php
    session_start();
    require_once "dbcontroller.php";
    $db = new DB;

    $sql = "SELECT * FROM tblkategori ORDER BY kategori";
    $row = $db->getALL($sql);

    if (isset($_GET['log'])) {
        session_destroy();
        header("location: index.php");
    }

    function cart() {
        global $db;
        $cart = 0;
        foreach ($_SESSION as $key => $value) {
            if ($key<>'pelanggan' && $key<>'idpelanggan') {
                $id = substr($key,1);
    
                $sql= "SELECT * FROM tblmenu WHERE idmenu=$id";
    
                $row = $db->getALL($sql);

                foreach ($row as $r) {
                $cart++;

                }
                
            }
        }
        return $cart;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Hataku|Restaurant Aplication SMK</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-2">
                <h2><a href="index.php" class="text-decoration-none text-danger">HATAKU</a></h2>
            </div>
            <div class="col-md-9">
                <?php
                    if (isset($_SESSION['pelanggan'])) {
                        echo '
                        <div class="float-end mt-4 text-danger" > <a class="nav-link" href="?log=logout">Logout</a></div>
                        <div class="float-end mt-4 m-5 text-danger">Pelanggan : '.$_SESSION['pelanggan'].'</div>
                        <div class="float-end mt-4 m-5 text-danger">Cart : (<a href="?f=home&m=beli" style="text-decoration-line:none;" class="text-danger">'.cart().'</a>)</div>
                        <div class="float-end mt-4 m-5 text-danger"><a style="text-decoration-line:none;" class="text-danger" href ="?f=home&m=history">History </a></div>
                        ';
                    } else {
                        echo ' <div class="float-end mt-4 text-danger" > <a class="nav-link" href="?f=home&m=login">Login</a></div>
                                <div class="float-end mt-4 m-5 text-danger"><a class="nav-link" href="?f=home&m=daftar">SignUp </a></div>
                        ';
                    }
                ?>



            </div>      

        </div>

        <div class="row">
                <div class="col-md-3 mt-5">
                    <h3>Kategori</h3>
                    <hr>
                    <?php if(!empty($row)) {?>
                    <ul class="nav flex-column">
                        <?php foreach($row as $r) : ?>
                        <li class="nav-item"> <a class="nav-link" href="?f=home&m=produk&id=<?php echo $r['idkategori']?>"> <?php echo $r['kategori']?></a></li>
                        <?php endforeach?>
                    </ul>
                    <?php }?>
                </div>

                <div class="col-md-9">
                    <?php
                    
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f=$_GET['f'];
                        $m=$_GET['m'];

                        $file = $f.'/'.$m.'.php';

                        require_once $file;
                    } else {
                        require_once "home/produk.php";
                    }
                    
                    
                    ?>
                </div>
            </div>
        </div>
</body>
</html>