<?php
    $email = $_SESSION['pelanggan'];
    $jumlahdata = $db->rowCOUNT("SELECT idorder FROM vorder WHERE pelanggan = '$email' ");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM vorder WHERE pelanggan = '$email' ORDER BY tglorder DESC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>


<div>
    <h3 class="float-start">Histori Transaksi</h3>
</div>

<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Tanggal Order</th>
            <th>Total</th>
            <th>Detail</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r) :?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['tglorder'] ?></td>
            <td><?php echo $r['total'] ?></td>
            <td><a href="?f=home&m=detail&id=<?php echo $r['idorder']?>">Detail</a></td>
        </tr>
            <?php endforeach ?>
    </tbody>
</table>
<div class="text-center">
<?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=home&m=history&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>