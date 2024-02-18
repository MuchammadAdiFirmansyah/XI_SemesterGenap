<?php

require_once "database.php";
$usedb=new Database;
echo $usedb->insertData();
echo "<br>";
echo $usedb->db;
echo "<br>";
echo $usedb->ambil();
echo "<br>";
echo $usedb->selectData();
echo "<br>";
echo dataBase::selectData();
echo "<br>";
$usepenjualan= new penjualan;
echo $usepenjualan->barang();
echo "<br>";
echo penjualan::pelanggan;


?>