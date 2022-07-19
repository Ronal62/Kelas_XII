<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek Kelas XII</title>
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
                    <td><?= $data['jenis_kelamin']; ?></td>
                    <td><?= $data['hobi']; ?></td>
                    <td><?= $data['no_hp']; ?></td>
                </tr>
            <?php
            }
            ?>
            </tbo dy>

    </table>
</body>

</html>