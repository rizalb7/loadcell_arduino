<?php 
// is_admin();
if(isset($_POST['nama'])){
    $nama=$_POST['nama'];
    $berat=$_POST['berat'];
    $ukuran=$_POST['ukuran'];
    $query="INSERT INTO tb_data(nama,berat,ukuran) 
    values('$nama','$berat','$ukuran')";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Menambahkan Data');
        window.location.href='index.php?r=data/tampil';
    </script>";
    }
}
$query="Select * from tb_weight where id_weight='1'";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
if ($row->weight > 7){
    $ukuran = "Besar";
}else{
    $ukuran = "Kecil";
}
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama:</label>
        <input name='nama' class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Berat:</label>
        <input name="berat" value="<?=$row->weight?>" class='form-control' readonly />
    </div>
    <div class='from-group'>
        <label>Ukuran:</label>
        <input name='ukuran' value="<?=$ukuran?>" class='form-control' readonly />
    </div>
    <button class='btn btn-primary my-2'>Simpan</button>
    <a href='index.php?r=data/tambah' class='btn btn-warning mx-2'>Refresh</a>
</form>