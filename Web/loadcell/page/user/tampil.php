<?php
//  is_admin()
 ?>
<a href='index.php?r=user/tambah' class='btn btn-success'>Tambah</a>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query="select * from user 
order by user_id desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
    
    echo "
    <tr>
        <td>$row->username</td>
        <td>$row->nama</td>
        <td>
            <a href='index.php?r=user/edit&id=$row->user_id' class='btn btn-info'>EDIT</a>
            <a onclick='return confirm(\"Anda Akan Menghapus Data ini\")' href='index.php?r=user/hapus&id=$row->user_id' class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    ";
}
    ?>
    </tbody>
</table>