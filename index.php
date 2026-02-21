<?php
// ===== DATA BIODATA =====
$nama = "Eka putra purandrita";
$panggilan = "Eka";
$agama = "Islam";
$tempat = "Kota Semarang";
$tgl = 12;
$bln = 4;
$thn = 2009;
$alamat = "JL medoho permai 02";
$email = "ekaputra1245p@gmail.com";
$wa = "088226865543";
$gender = "Laki-laki";
$negara = "Indonesia";

$tahunSekarang = date("Y");
$umur = $tahunSekarang - $thn;
$tahun10 = $tahunSekarang + 10;
$umur10 = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Biodata</h1>

<p>Nama : <?php echo $nama; ?></p>
<p>Panggilan : <?php echo $panggilan; ?></p>
<p>Umur : <?php echo $umur; ?></p>
<p>Email : <?php echo $email; ?></p>

<hr>

<h2>10 Tahun Lagi</h2>

<p>
Hai namaku <?php echo $panggilan; ?>.
Saat ini tahun <?php echo $tahunSekarang; ?> umurku <?php echo $umur; ?> tahun.
10 tahun lagi di tahun <?php echo $tahun10; ?> umurku <?php echo $umur10; ?>.
Aku ingin menjadi orang sukses.
</p>

<hr>

<a href="jadwal.php">Ke Jadwal</a>
<br>
<a href="piket.php">Ke Piket</a>

<h2>Hobi</h2>
<ol>
    <li>belajar hal baru</li>
    <li>Main Game</li>
    <li>Olahraga kalo pengen </li>
</ol>

<h2>Makanan Favorit</h2>
<ul type="square">
    <li>Nasi Goreng</li>
    <li>Ayam Geprek</li>
    <li>Mie Ayam</li>
</ul>

<h2>Minuman Favorit</h2>
<ol type="A">
    <li>kopi</li>
    <li>Jus Alpukat</li>
    <li>Air Mineral</li>
</ol>


<h2>Skills</h2>

<p>HTML</p>
<input type="range" min="0" max="100" value="80">

<p>CSS</p>
<input type="range" min="0" max="100" value="70">

<p>PHP</p>
<input type="range" min="0" max="100" value="60">


<h2>Riwayat Pendidikan</h2>

<table border="1">
<tr>
    <th>Tingkat</th>
    <th>Nama Sekolah</th>
    <th>Tahun Masuk</th>
    <th>Tahun Lulus</th>
</tr>

<tr>
    <td>SD</td>
    <td>SD Negeri sambirejo 01</td>
    <td>2014</td>
    <td>2022</td>
</tr>

<tr>
    <td>SMP</td>
    <td>SMP Negeri 15 Semarang</td>
    <td>2022</td>
    <td>2024</td>
</tr>

<tr>
    <td>SMK</td>
    <td>SMK Negeri 8 Semarang</td>
    <td>2025</td>
    <td>-</td>
</tr>

</table>

<h2>Foto Saya</h2>
<img src="img/IMG_20241216_183354.jpg" width="200">

<h2>Motto Hidup</h2>

<marquee behavior="scroll" direction="left">
Jangan nyerah sebelum berhasil
</marquee>

<h2>Menu</h2>

<a href="jadwal.php">Ke Halaman Jadwal</a><br>
<a href="piket.php">Ke Halaman Piket</a>

</body>
</html>