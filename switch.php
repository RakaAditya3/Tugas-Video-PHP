<?php

    $hari = 10;

    // switch ($hari) {
    //     case 1:
    //         echo "Minggu";
    //         break;
    //     case 2:
    //         echo "Senin";
    //         break;
    //     case 3:
    //         echo "Selasa";
    //         break;
    //     case 4:
    //         echo "Rabu";
    //         break;
    //     case 5:
    //         echo "Kamis";
    //         break;
    //     case 6:
    //         echo "Jumat";
    //         break;
    //     case 7:
    //         echo "Sabtu";
    //         break;
        
    //     default:
    //         echo "Hari Tidak ada";
    //         break;
    // }

    $pilihan = "Ubah";

    switch ($pilihan) {
        case 'Tambah':
            echo "Anda Memilih Tambah";
            break;
        case 'Ubah':
            echo "Anda Memilih Ubah";
            break;
        case 'Hapus':
            echo "Anda Memilih Hapus";
            break;
        
        default:
            echo "Pilihan Belum Ada";
            break;
    }
?>