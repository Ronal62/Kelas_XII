<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek CRUD Kelas XII</title>
</head>

<body>
    <h2>Data Kelas XII</h2>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tetala</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>JKL</th>
                <th>Hobi</th>
                <th>HP</th>
                <th>Aksi</th>

            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            include 'koneksi.php';
            $sql = mysqli_query($conn, "SELECT * FROM tb_siswa");
            while ($data = mysqli_fetch_assoc($sql)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['tetala']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td><?= $data['kelas']; ?></td>
                    <td><?= $data['jkl']; ?></td>
                    <td><?= $data['hobi']; ?></td>
                    <td><?= $data['no_hp']; ?></td>
                    <td><a href="<?= 'edit_admin.php?id=' . $row['id_admin'] ?>"><button class="btn btn-icon btn-primary"><i class="far fa-edit"></i> Edit</button></a>

                        <a href="<?= 'hapus_admin.php?id_admin=' . $row['id_admin'] ?>" onclick="return confirm('Yakin Menghapus Data Ini?')"><button class="btn btn-icon btn-danger"><i class="fas fa-times"></i> Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <h3>Form Tambah Data</h3>
    <form action="" method="post" enctype="">
        Nama : <input type="text" name="nama"> <br>
        Tetala : <input type="text" name="tetala"> <br>
        Alamat : <textarea name="alamat" cols="30" rows="5"></textarea> <br>
        Kelas : <select name="kelas" id=""><br>
            <option value="">-->Pilih Kelas<-- </option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select> <br>
        Jenis Kelamin :
        <input type="radio" name="jkl" value="Laki-Laki"> Laki-Laki
        <input type="radio" name="jkl" value="Perempuan"> Perempuan <br>
        Hobi : <input type="text" name="hobi"><br>
        No Hp : <input type="number" name="no_hp"><br>
        <button name="simpan" type="submit">Simpan</button>

    </form>
</body>

</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
    $tetala = $_POST['tetala'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $jkl = $_POST['jkl'];
    $hobi = $_POST['hobi'];
    $no_hp = $_POST['no_hp'];

    mysqli_query($conn, "INSERT INTO tb_siswa VALUES('','$nama','$tetala','$alamat','$kelas','$jkl','$hobi','$no_hp')");
    if ($sql) {
        echo "
        <script>
        alert('Data berhasil tersimpan');
        window.location ='index.php';
        </script>
        ";
    }
}
?>