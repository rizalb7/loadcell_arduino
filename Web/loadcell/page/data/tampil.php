<?php 
// is_admin()
?>
<a href='index.php?r=data/tambah' class='btn btn-success my-2'>Tambah</a>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Berat</th>
            <th>Ukuran</th>
            <th>Waktu</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
    <?php
$query="select * from tb_data
order by id_data desc";
$res=mysqli_query(koneksi(),$query);
while($row=mysqli_fetch_object($res)){
    
    echo "
    <tr>
        <td>$row->nama</td>
        <td>$row->berat</td>
        <td>$row->ukuran</td>
        <td>$row->created_at</td>
        <td>
            <a href='index.php?r=data/edit&id=$row->id_data' class='btn btn-info'>EDIT</a>
            <a onclick='return confirm(\"Anda Akan Menghapus Data ini\")' href='index.php?r=data/hapus&id=$row->id_data' class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    ";
}
    ?>
    </tbody>
</table>