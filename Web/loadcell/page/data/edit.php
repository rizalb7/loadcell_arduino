<?php 
// is_admin();
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['nama'])){
    $nama=$_POST['nama'];
    $query="UPDATE tb_data set 
    nama='$nama' where id_data=$id ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=data/tampil';
    </script>";
    }
}
$query="Select * from tb_data where id_data=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Nama:</label>
        <input value="<?=$row->nama?>" name='nama' class='form-control' required />
    </div>
    <button class='btn btn-primary'>Simpan</button>
</form>