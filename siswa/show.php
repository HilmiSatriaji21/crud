<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <?php
    foreach ($siswa->show($_GET['id'])as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <form action="/siswa/proses.php?aksi=show" method="post">
        <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?php echo $nis; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" <?php echo $nama; ?> readonly</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" <?php echo $alamat; ?> readonly></textarea></td>
                </tr>
                            </table>
                      </form>        
            </fieldset>
      </body>
</html>