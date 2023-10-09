<?php
    //memanggil class database
    include '../classes/database.php';
    //intansiasi class database
    $db = new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>NO : </th>
        <th>NIM: </th>
        <th>Nama : </th>
        <th>Alamat : </th>
        <th>Aksi : </th>
    </tr>
    <?php
        $no=1;
        foreach($db->tampil_mahasiswa() as $x){
        ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_mhs.php?id=<?php echo $x['id'];?>">Edit</a>
            <a href="hapus_mhs.php">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>