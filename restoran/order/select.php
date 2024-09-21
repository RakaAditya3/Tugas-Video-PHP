<?php
    $jumlahdata = $db->rowCOUNT("SELECT idorder FROM vorder ");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM vorder ORDER BY status,idorder ASC LIMIT $mulai,$banyak";
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
            <th>Pelanggan</th>
            <th>Tanggal Order</th>
            <th>Total</th>
            <th>Bayar</th>
            <th>Kembali</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        <?php if (!empty($row)) { ?>
        <?php foreach ($row as $r) :?>
            <?php 
                
                if ($r['status'] == 0) {
                    $status = ' <td><a href="?f=order&m=bayar&id='.$r['idorder'].'">Bayar</a></td>';
                } else {
                    $status = '<td>LUNAS</td>';
                }
                
                ?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['pelanggan'] ?></td>
            <td><?php echo $r['tglorder'] ?></td>
            <td><?php echo $r['total'] ?></td>
            <td><?php echo $r['bayar'] ?></td>
            <td><?php echo $r['kembali'] ?></td>
            <?php echo $status;?>
        </tr>
            <?php endforeach ?>
            <?php } ?>
    </tbody>
</table>
<div class="text-center">
<?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=order&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>