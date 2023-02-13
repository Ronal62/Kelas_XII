<?php
include 'koneksi.php';
$id_siswa = $_GET['id_siswa'];
$sql = mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa = $id_siswa");

if ($sql) {
    echo "
        <script>
        alert('Data berhasil dihapus');
        window.location ='media.php';
        </script>
        ";
}
