<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h1>SILAHKAN LOGIN</h1>
        <div class="col-md-12">
            <div class="card-body">
                <form method="POST" action="aksi_login.php">
                    <div class="form-group mb-3">
                        <input type="text" name="username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password">
                    </div>
                    <button class="btn btn-block btn-primary mb-4" type="submit" value="submit" name="simpan">LOGIN</button>
                    <hr>
                </form>
            </div>
        </div>
    </center>
    </div>
</body>

</html>