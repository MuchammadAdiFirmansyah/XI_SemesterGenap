<h1>Belajar php</h1>
<form action="" method="get">
    nama :
    <input type="text" name="nama" placeholder="masukkan nama">
    <input type="sumbit" sumbit="tombol" value="kirim">
</form>
<a href="?cobarpl">klik</a>
<?php
$isi=$_POST["nama"];

$isi=0.5*5*10;
var_dump($isi);
echo '<h2>'.$isi.'</h2>';
echo persegi(10);
echo lingkaran(7);
function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}
function lingkaran ($r){

    $luas=3.14*$r*$r;
    return $luas;
}

?>
<p>belajar php</p>;