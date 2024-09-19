<h2>Daftar Menu</h2>


<div class="float-end">
    <?php
    
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $where = "WHERE idkategori = $id";

        $id = "&id=".$id;
    } else {
        $where = ""; 
        $id="";
    }
    
    ?>
</div>

<?php
    $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tblmenu");
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>
        <?php if(!empty($row)) {?>
        <?php foreach ($row as $r) :?>
            <div class="card" style="width: 18rem; float:left; margin:10px;">
                <img src="Upload/<?php echo $r['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $r['menu'] ?></h5>
                        <p class="card-text"><?php echo $r['harga'] ?></p>
                        <a type="button" class="btn btn-danger float-end" href="?f=kategori&m=insert">Beli</a>
                    </div>
            </div>

        <?php endforeach ?>
        <?php }?>
<div class="text-center mt-5" style="clear:both;">
<?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=home&m=produk&p='.$i.$id.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>




</div>