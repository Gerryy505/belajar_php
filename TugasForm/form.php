<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Biodata</title>
</head>
<body>
    <h1>BIODATA SISWA</h1>
    
    <form action="index.php" method="post">
        <p>SILAHKAN ISI DAFTAR BERIKUT! </p>
        <label>NISN : </label> <input type="number" name="nisn"> <br>
        <label>NAMA LENGKAP : </label><input type="text" name="namaLengkap"> <br>
        <label>TEMPAT LAHIR : </label> <input type="text" name="tempatLahir"> <br>
        <p>
            <label>TANGGAL LAHIR :</label>
            <input type="date" name="tanggal">
        </p>
        <p>
            <label>Gender :</label>
            <input type="radio" name="gender" value="L">LAKI-LAKI
            <input type="radio" name="gender" value="P">PEREMPUAN 
        </p>
        <p>
            <label>AGAMA :</label>
            <select name="Agama">
                <option value="0">Silahkan pilih agama anda</option>
                <option value="1">KRISTEN</option>
                <option value="2">KATOLIK</option>
                <option value="3">ISLAM</option>
                <option value="4">Konghucu</option>
                <option value="5">BUDHA</option>
                <option value="6">HINDU</option>
            </select>
        </p>
        <p>
            <label>ALAMAT :</label>
            <br />
            <textarea name="ALAMAT" cols= "50" rows="10"></textarea>
        </p>
        <label>ASAL SEKOLAH : </label> <input type="text" name="AsalSekolah"
        placeholder="NamaSekolahAnda"> <br>
        <p>
            <label>PILIHAN JURUSAN 1 :</label>
            <select name="Jurusan1" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>PILIHAN JURUSAN 2 :</label>
            <select name="Jurusan2" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>PILLIHAN JURUSAN 3 :</label>
            <select name="Jurusan3" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
             EKSTRAKULIKULER :<Label for="ekstra" name="eks"> </Label>
            <input type="checkbox" value="OSIS"name="eskul[]">Organisasi Siswa Intra Sekolah (OSIS)
            <input type="checkbox" value="GDS"name="eskul[]">Gerakan Disiplin Siswa
            <input type="checkbox" value="Paskibra"name="eskul[]">Paskibraka <br>
            <input type="checkbox" value="Remas"name="eskul[]">Remaja Masjid Al-Kautsar
            <input type="checkbox" value="EC"name="eskul[]">English Club Esemkasa
            <input type="checkbox" value="PMR"name="eskul[]">Palang Merah Remaja <br>
            <input type="checkbox" value="FS"name="eskul[]">Futsal
            <input type="checkbox" value="Basket"name="eskul[]">Basket
            <input type="checkbox" value="Volly"name="eskul[]">Voly <br>
            <input type="checkbox" value="TK"name="eskul[]">Teater Kusuma
            <input type="checkbox" value="Tari"name="eskul[]">Tari
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar">
        </p>
    </form>
</body>
</html>