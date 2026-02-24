<?php
$nama = "Eka Putra Purandrita";
$panggilan = "Eka";
$agama = "Islam";
$tempat = "Semarang";
$tgl = 12;
$bln = 4;
$thn = 2009;
$alamat = "Jl. Medoho Permai 02";
$email = "ekaputra1245p@gmail.com";
$wa = "088226865543";
$gender = "Laki-laki";
$negara = "Indonesia";
$hobi1 = "Belajar hal baru";
$hobi2 = "Main game";
$hobi3 = "Olahraga";
$motto = "Hidup untuk kerja, kerja untuk orang tua";

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

<h1>BIODATA SAYA</h1>
<hr>

<h2>Foto Saya</h2>
<img src="img_IMG_20241216_183405.jpg" width="200">

<h2>Data Diri</h2>
<p>Nama Lengkap : <?php echo $nama; ?></p>
<p>Nama Panggilan : <?php echo $panggilan; ?></p>
<p>Tempat, Tanggal Lahir : <?php echo $tempat.", ".$tgl."-".$bln."-".$thn; ?></p>
<p>Umur : <?php echo $umur; ?> Tahun</p>
<p>Jenis Kelamin : <?php echo $gender; ?></p>
<p>Agama : <?php echo $agama; ?></p>
<p>Alamat : <?php echo $alamat; ?></p>
<p>Email : <?php echo $email; ?></p>
<p>No WA : <?php echo $wa; ?></p>
<p>Kewarganegaraan : <?php echo $negara; ?></p>

<hr>

<h2>Keinginan 10 Tahun Lagi</h2>
<p>
Hai namaku <?php echo $panggilan; ?>.
Saat ini tahun <?php echo $tahunSekarang; ?> umurku <?php echo $umur; ?> tahun.
10 tahun lagi di tahun <?php echo $tahun10; ?> umurku <?php echo $umur10; ?> tahun.
saya ingin menjadi orang sukses dan membanggakan orang tua, menaikkan derajat orang tua dan mobil BMW.
</p>

<hr>

<h2>Hobi</h2>
<ol>
<li><?php echo $hobi1; ?></li>
<li><?php echo $hobi2; ?></li>
<li><?php echo $hobi3; ?></li>
</ol>

<h2>Makanan Favorit</h2>
<ul type="square">
<li>Nasi Goreng</li>
<li>Ayam Geprek</li>
<li>Mie Ayam</li>
</ul>

<h2>Minuman Favorit</h2>
<ol type="A">
<li>Kopi</li>
<li>Jus Alpukat</li>
<li>Air Mineral</li>
</ol>

<hr>

<h2>Skills</h2>

<p>HTML</p>
<input type="range" min="0" max="100" value="80">

<p>CSS</p>
<input type="range" min="0" max="100" value="70">

<p>PHP</p>
<input type="range" min="0" max="100" value="60">

<hr>

<h2>Riwayat Pendidikan</h2>
<table border="1" cellpadding="8">
<tr>
<th>Tingkat</th>
<th>Nama Sekolah</th>
<th>Tahun Masuk</th>
<th>Tahun Lulus</th>
</tr>

<tr>
<td>SD</td>
<td>SD Negeri Sambirejo 01</td>
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

<hr>

<h2>Motto Hidup</h2>
<marquee direction="left"><?php echo $motto; ?></marquee>

<hr>

<a href="jadwal.php">Ke Halaman Jadwal</a> |
<a href="piket.php">Ke Halaman Piket</a>

</body>
</html>