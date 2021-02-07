<?php 
// is_admin();
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $nama=$_POST['nama'];
    $query="INSERT INTO user(username,password,nama) 
    values('$username','$password','$nama')";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Menambahkan Data');
        window.location.href='index.php?r=user/tampil';
    </script>";
    }
}
?>
<form action='' method='post' >
    <div class='from-group'>
        <label>Email/Username:</label>
        <input type='email' name='username' placeholder="Masukkan Email Disini" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Password:</label>
        <input type='password' name='password' placeholder="Masukkan Password Disini" class='form-control' required />
    </div>
    <div class='from-group'>
        <label>Nama:</label>
        <input name='nama' class='form-control' required />
    </div>
    
    <button class='btn btn-primary'>Simpan</button>
</form>