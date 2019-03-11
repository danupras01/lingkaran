<html>
<h3>hitung Luas Lingkaran</h3>
<p>Masukkan ukuran jari-jari lingkaran</p>
<form action="luas-lingkaran.php" method="post">
	jari-jari :<input type="text" name="jari"><br>
		<input type="submit" name="submit" value="Hitung">
<form/>
<?php
if (isset($_POST ['submit'])){
	$jarii = $_POST['jari'];
	$Luas_lingkaran = 3.14 * $r * $r; //Menghitung luas lingkaran
	echo "Luas lingkaran : $jari <br>";
	echo "yaitu $Luas_lingkaran";
}
?>
</html>