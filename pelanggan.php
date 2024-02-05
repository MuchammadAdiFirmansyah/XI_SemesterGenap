<?php
$host="127.0.0.1";
$user="root";
$pasword="";
$db="dbtoko";
$koneksi=new mysqli($host, $user, $pasword, $db);

$id=0;
$namapelanggan="";
$telepon=0;
$alamat=0;

if(isset($_GET["ubah"])){
    $id=$_GET["ubah"];
    $sql="SELECT * FROM pelanggan WHERE id=".$id;
    $hasil=mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0){
        $row=mysqli_fetch_array($hasil);
        $id=$row[0];
        $namapelanggan=$row[1];
        $telepon=$row[2];
        $alamat=$row[3];
    }

}

?>

<form action="" method="post">
    nama:
    <input type="text" name="pelanggan" placeholder="nama pelanggan" value="<?php echo $namapelanggan ?>">
    <br>
    alamat:
    <input type="number" name="nomor" placeholder="nomor" value="<?php echo $telepon ?>">
    <br>
    nomor:
    <input type="number" name="alamat" placeholder="alamat" value="<?php echo $alamat ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
    <input type="hidden" name="id" value="<?php echo $id ?>">
</form>

<?php
if (isset($_POST["simpan"])) {
    $namapelanggan=$_POST["pelanggan"];
    $alamat=$_POST["alamat"];
    $telepon=$_POST["nomor"];

    if(isset($_POST["id"])){
        $id=$_POST["id"];
        if($id==0){
            $sql="INSERT INTO pelanggan(namapelanggan,alamat,telepon) VALUES ('$namapelanggan', $alamat, $telepon)";
            $hasil=mysqli_query($koneksi,$sql);
        }else {
            $sql= "UPDATE pelanggan SET namapelanggan='$namapelanggan', alamat=$alamat ,telepon=$telepon WHERE id=".$id;
            $hasil=mysqli_query($koneksi,$sql);
        }
    }
}

if(isset($_GET["hapus"])){
    $id=$_GET["hapus"];
    $sql="DELETE FROM pelanggan WHERE id=".$id;
    $hasil=mysqli_query($koneksi, $sql);
}





$sql="SELECT * FROM pelanggan";

$hasil=mysqli_query($koneksi, $sql);
// var_dump($hasil);

echo "<table border =2px>
<thead>
<tr>
<th>
NAMA 
</th>
<th>
ALAMAT
</th>
<th>
NOMOR
</th>
<th>
HAPUS
</th>
<th>
UBAH
</th>
</tr>
</thead>
<tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";  
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . "<a href='?hapus=".$row [0]."'>hapus</a>" . "</td>";
    echo "<td>" . "<a href='?ubah=".$row [0]."'>ubah</a>" . "</td>";
    echo "</tr>";
}

echo " </tbody>
    </table>";

  
?>
