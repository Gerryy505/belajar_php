<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">      
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){

    }
    ?>
     
     <table>

        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>
                <?= $_POST['nisn']?>
            </td>
        </tr>

        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td>
                <?= $_POST['namaLengkap']?>
            </td>
        </tr>

        <tr>
            <td>TEMPAT LAHIR</td>
            <td>:</td>
            <td>
                <?= $_POST['tempatLahir']?>
            </td>
        </tr>

        <tr>
            <td>TANGGAL LAHIR</td>
            <td>:</td>
            <td>
                <?= $_POST['tanggal']?>
            </td>
        </tr>

        <tr>
            <td>Gander</td>
            <td>:</td>
            <td>
                <?= $_POST['gender']?>
            </td>
        </tr>

        <tr>
            <td>AGAMA</td>
            <td>:</td>
            <td>
                <?= $_POST['Agama']?>
            </td>
        </tr>

        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td>
                <?= $_POST['ALAMAT']?>
            </td>
        </tr>

        <tr>
            <td>ASAL SWEKOLAH</td>
            <td>:</td>
            <td>
                <?= $_POST['AsalSekolah']?>
            </td>
        </tr>

        <tr>
            <td>JURUSAN 1</td>
            <td>:</td>
            <td>
                <?= $_POST['Jurusan1']?>
            </td>
        </tr>

        <tr>
            <td>JURUSAN 2</td>
            <td>:</td>
            <td>
                <?= $_POST['Jurusan2']?>
            </td>
        </tr>

        <tr>
            <td>JURUSAN 3</td>
            <td>:</td>
            <td>
                <?= $_POST['Jurusan3']?>
            </td>
        </tr>

        <tr>
            <td>EKSTRAKULIKULER</td>
            <td>:</td>
            <td>
                <?=implode(",",$_POST['eskul']); ?>
            </td>
        </tr>









     </table>

</body>
</html>