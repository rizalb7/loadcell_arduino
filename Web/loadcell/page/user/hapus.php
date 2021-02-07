<?php
// is_admin();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id = mysqli_real_escape_string(koneksi(), $id);

$query = "DELETE FROM user where user_id=$id ";
if (mysqli_query(koneksi(), $query)) {
 echo "<script>
        alert('Berhasil Dihapus');
        window.location.href='index.php?r=user/tampil';
    </script>";
}
