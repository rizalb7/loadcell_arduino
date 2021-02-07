<?php 
// is_admin();
$id=isset($_GET['id'])?$_GET['id']:'';
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $query="UPDATE user set username='$username' where user_id=$id ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=user/tampil';
    </script>";
    }
}
$query="Select * from user where user_id=$id";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Username:</label>
        <input name='username' value="<?=$row->username?>" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Nama:</label>
        <input value="<?=$row->nama?>" name='nama' class='form-control' required />
    </div>
    <button class='btn btn-primary'>Simpan</button>
</form>