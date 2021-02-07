<?php 
$id=$_SESSION['username'];
$id=mysqli_real_escape_string(koneksi(),$id);
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $gender=$_POST['gender'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];
    $query="UPDATE user set username='$username',
    nama='$nama',gender='$gender',alamat='$alamat',
    agama='$agama' where username='$id' ";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Mengubah Data');
        window.location.href='index.php?r=profile/edit';
    </script>";
    }
}
$query="Select * from user where username='$id' ";
$res=mysqli_query(koneksi(),$query);
$row=mysqli_fetch_object($res);
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Username</label>
        <input name='username' value="<?=$row->username?>" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>nama</label>
        <input value="<?=$row->nama?>" name='nama' class='form-control' required />
    </div> 
    <div class='from-group'>
        <label>Gender:</label><br>
        <input type="radio" id="pria" name="gender" value="pria" <?php if($row->gender=='pria') echo 'checked'?> required>
        <label for="pria">Pria</label><br>
        <input type="radio" id="wanita" name="gender" value="wanita" <?php if($row->gender=='wanita') echo 'checked'?> required>
        <label for="wanita">Wanita</label><br>
    </div>
    <div class='from-group'>
        <label>Alamat:</label>
        <textarea name='alamat' class='form-control' required><?=$row->alamat?></textarea>
    <div class='from-group'>
        <label>Agama:</label>
        <select name='agama' class='form-control' required>
        <option value="">PIlih Agama</option>
        <option value="islam" <?php if($row->agama=='islam')echo "selected";?>>Islam</option>
        <option value="kristen" <?php if($row->agama=='kristen')echo "selected";?>>Kristen</option>
        <option value="katholik" <?php if($row->agama=='katholik')echo "selected";?>>Katholik</option>
        <option value="hindu" <?php if($row->agama=='hindu')echo "selected";?>>Hindu</option>
        <option value="budha" <?php if($row->agama=='budha')echo "selected";?>>Budha</option>
        </select>
    </div>
    <div class='from-group'>
        <label>Level</label>
        <select name='level' class='form-control' disabled>
        <option value="" disabled>PIlih Level</option>
        <option value="1" <?php if($row->level_id==1)echo "selected";?>   >Admin</option>
        <option value="2" <?php if($row->level_id==2)echo "selected";?>      >Tamu</option>
        </select>
    </div>
    <button class='btn btn-primary'>Simpan</button>
</form>