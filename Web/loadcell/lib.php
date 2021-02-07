<?php
function koneksi(){
    $koneksi=mysqli_connect("localhost",'root','','loadcell');
    return $koneksi;
}

function is_admin(){
    if($_SESSION['level']!=1){
        echo "<script>
        alert('Anda Tidak Bisa Mengakses Modul Ini');
        window.location.href='index.php';
    </script>";
    }
}