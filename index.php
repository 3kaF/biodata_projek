<?php
$nama = "Eka Putra Purandrita";
$panggilan = "Eka";
$agama = "Islam";
$tempat = "Kota Semarang";
$tgl = 12;
$bln = 4;
$thn = 2009;
$alamat = "Jl. Medoho Permai 02";
$email = "ekaputra1245p@gmail.com";
$wa = "088226865543";
$gender = "Laki-laki";
$negara = "Indonesia";
$ig = "https://www.instagram.com/ekaxzrta?igsh=MTdmZ251dWNwbzQ3ag=="; 

$tahunSekarang = date("Y");
$umur = $tahunSekarang - $thn;
$tahun10 = $tahunSekarang + 10;
$umur10 = $umur + 10;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biodata <?= $panggilan; ?></title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Biodata <?= $panggilan; ?></h1>

<section>
<h2>Data Diri</h2>
<p><b>Nama:</b> <?= $nama; ?></p>
<p><b>Panggilan:</b> <?= $panggilan; ?></p>
<p><b>Umur:</b> <?= $umur; ?> Tahun</p>
<p><b>Agama:</b> <?= $agama; ?></p>
<p><b>Alamat:</b> <?= $alamat; ?></p>
<p><b>Email:</b> <?= $email; ?></p>
<p><b>WhatsApp:</b> <?= $wa; ?></p>
<p><b>Instagram:</b> 
    <a href="<?= $ig; ?>" target="_blank">Klik di sini</a>
</p>
</section>

<hr>

<section>
<h2>10 Tahun Lagi</h2>
<p>
Hai, namaku <?= $panggilan; ?>.  
Sekarang tahun <?= $tahunSekarang; ?> dan umurku <?= $umur; ?> tahun.  
10 tahun lagi di tahun <?= $tahun10; ?> umurku <?= $umur10; ?> tahun.  
saya ingin menjadi orang sukses dan membanggakan orang tua, menaikkan derajat orang tua dan mobil BMW.
</p>
</section>

<hr>

<section>
<h2>Hobi</h2>
<ol>
<li>Belajar hal baru</li>
<li>Main Game</li>
<li>Olahraga</li>
</ol>

<h2>Makanan Favorit</h2>
<ul>
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
</section>

<hr>

<section>
<h2>Skills</h2>

<p>HTML</p>
<input type="range" min="0" max="100" value="80">

<p>CSS</p>
<input type="range" min="0" max="100" value="70">

<p>PHP</p>
<input type="range" min="0" max="100" value="60">
</section>

<hr>

<section>
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
</section>

<hr>

<section>
<h2>Foto</h2>
<img src="img_IMG_20241216_183405.jpg" width="200">
</section>

<hr>

<nav>
<a href="jadwal.php">Halaman Jadwal</a> |
<a href="piket.php">Halaman Piket</a>
</nav>

</div>

</body>
</html>