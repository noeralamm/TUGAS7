<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><h3>ISI FORM KONTAK</h3> </center>
    <br>
    <br>
  <center>
<form method="post" action="tambahkontak.php">
    <table>
    <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
        <tr><td>JENIS KELAMIN</td><td>
            <input type="radio" name="jenis_kelamin" value="laki laki">Laki Laki
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
        </td></tr>
        <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
        <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
        <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
        <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>
        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr></center>
    </table>
</form>
</body>
</html