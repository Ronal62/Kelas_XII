<?php
include 'koneksi.php';
$id_siswa = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' "));
?>

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


    <h3>Form Edit Data</h3>
    <form action="" method="post" enctype="">
        Nama : <input type="text" name="nama" value="<?= $data['nama']; ?>"> <br>
        Tetala : <input type="text" name="tetala" value="<?= $data['tetala']; ?>"> <br>
        Alamat : <textarea name="alamat" cols="30" rows="5"><?= $data['alamat']; ?></textarea> <br>
        Kelas : <select name="kelas" id=""><br>
            <option value="">-->Pilih Kelas<-- </option>
            <option value="X" <?= $data['kelas'] == 'X' ? 'selected' : ''; ?>>X</option>
            <option value="XI" <?= $data['kelas'] == 'XI' ? 'selected' : ''; ?>>XI</option>
            <option value="XII" <?= $data['kelas'] == 'XII' ? 'selected' : ''; ?>>XII</option>
        </select> <br>
        Jenis Kelamin :
        <input type="radio" name="jkl" value="Laki-Laki" <?= $data['jkl'] == 'Laki-Laki' ? 'checked' : ''; ?>> Laki-Laki
        <input type="radio" name="jkl" value="Perempuan" <?= $data['jkl'] == 'Perempuan' ? 'checked' : ''; ?>> Perempuan <br>
        Hobi : <input type="text" name="hobi" value="<?= $data['hobi']; ?>"><br>
        No Hp : <input type="number" name="no_hp" value="<?= $data['no_hp']; ?>"><br>
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

    $sql =  mysqli_query($conn, "UPDATE tb_siswa SET nama ='$nama', tetala ='$tetala', 
    alamat = '$alamat', kelas = '$kelas', jkl = '$jkl', hobi = '$hobi', no_hp = '$no_hp'
     WHERE id_siswa = '$id_siswa' ");
    if ($sql) {
        echo "
        <script>
        alert('Data berhasil diupdate');
        window.location ='media.php';
        </script>
        ";
    }
}
?>