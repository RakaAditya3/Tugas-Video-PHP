<h1>SignUp</h1>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="Masukkan Nama Pelanggan" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Alamat</label>
            <input type="text" name="alamat" required placeholder="Masukkan Alamt" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">No.Telp</label>
            <input type="text" name="telp" required placeholder="Masukkan No.Telp" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Email</label>
            <input type="text" name="email" required placeholder="Masukkan Email" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Password</label>
            <input type="password" name="password" required placeholder="Masukkan Password" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="Konfirmasi user" class="form-control">
        </div>
        
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-danger mt-2">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tblpelanggan (pelanggan, alamat, telp, Email, password, aktif) VALUES ('$pelanggan', '$alamat', '$telp', '$email', '$password', 1)";
            $db->runSQL($sql);
            header("Location: ?f=home&m=info");
        } else {
            echo "<h2>Password Tidak Cocok</h2>";
        }


    }

?>