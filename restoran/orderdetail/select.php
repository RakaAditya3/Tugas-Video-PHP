<h3 class="">Detail Transaksi</h3>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Tanggal Awal</label>
            <input type="date" name="tawal" required class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Tanggal Akhir</label>
            <input type="date" name="takhir" required class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="Cari" class="btn btn-danger mt-2">
        </div>
    </form>
</div>


<?php

    $jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail ");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai,$banyak";
    if (isset($_POST['simpan'])) {
        $tawal = $_POST['tawal'];
        $takhir = $_POST['takhir'];
        $sql = "SELECT * FROM vorderdetail WHERE  tglorder BETWEEN '$tawal' AND '$takhir'";
        // echo $sql;
    }
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

    $total = 0;

?>

<table class="table table-bordered border-dark w-100 mt-4">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Pelanggan</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Alamat</th>
            <th>Tanggal Order</th>
            <th>Total</th>


        </tr>
    </thead>
    <tbody>
    <?php if (!empty($row)) { ?>
        <?php foreach ($row as $r) :?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['pelanggan'] ?></td>
            <td><?php echo $r['menu'] ?></td>
            <td><?php echo $r['harga'] ?></td>
            <td><?php echo $r['jumlah'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td><?php echo $r['tglorder'] ?></td>
            <td><?php echo $r['jumlah'] * $r['harga'] ?></td>

            <?php

                $total = $total + ($r['jumlah'] * $r['harga']);
            ?>
        </tr>
            <?php endforeach ?>
            <?php } ?>

            <tr>
                <td colspan="7"><h3>Grand Total</h3></td>
                <td><h4><?php echo $total;?></h4></td>
            </tr>
    </tbody>
</table>
<div class="text-center">
<?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=orderdetail&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>