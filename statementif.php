<?php
//Apakah tombol cek sudah ditekan
if (isset($_POST["cek"])) {
$nilai=$_POST["nilai"];
if($nilai==""){
echo "<b><h1> Anda belum memasukkan nilai </h1></b>";
}elseif (!is_numeric($nilai)) {
echo "<b><h1> Ini bukan nilai angka </h1></b>";
}else{
if ($nilai<=30){
echo "<b><h1> Anda mendapatkan nilai E </h1></b>";
}elseif ($nilai <=50) {
echo "<b><h1> Anda mendapatkan nilai D </h1></b>";
}elseif ($nilai <=70){
echo "<b><h1> Anda mendapatkan nilai C </h1></b>";
}elseif ($nilai <=85){
echo "<b><h1> Anda mendapatkan nilai B </h1></b>";
}else{
echo "<b><h1> Anda mendapatkan nilai A </h1></b>";
}
}
}
?>
<html><head><title>Statement If</title>
</head>
<body {
	bgcolor="B0C4DE">
<form action="" method="post">
<label for="nilai"> Nilai </label>
<input type="text" name="nilai" id="nilai">
<button type="submit" name="cek"> Cek </button>
</form>
</body>
</html>