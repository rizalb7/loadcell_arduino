<?php
session_start();
include('lib.php');
$username=isset($_POST['username'])?$_POST['username']:'';
$username=mysqli_real_escape_string(koneksi(),$username);//Anti SQLINJECTION
$password=isset($_POST['password'])?md5($_POST['password']):'';
$password=mysqli_real_escape_string(koneksi(),$password);
$query="select * from user where username='$username' AND password='$password'";
$res=mysqli_query(koneksi(),$query);
if(mysqli_num_rows($res)==1){
    $row=mysqli_fetch_object($res);
    $_SESSION['username']=$username;
    $_SESSION['is_login']=TRUE;
    // $_SESSION['level']=$row->level_id;
    $_SESSION['nama']=$row->nama;
    echo "<script>
        alert('Berhasil Login');
        window.location.href='index.php';
    </script>";
}else{
    echo "
    <script>
        alert('Gagal Login Username Password TIdak valid');
        window.location.href='login.php';
    </script>
    ";
}
