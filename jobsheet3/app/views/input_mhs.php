<h3>Tambah data Mahasiswa</h3>

<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td> <input type="text" name="nim" id="" > </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> <input type="text" name="nama" id=""> </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="" cols="20" rows="5"></textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>