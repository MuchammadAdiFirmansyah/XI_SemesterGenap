
<h1>select kategori</h1>

<a href="?f=kategori&m=insert">Tambah Data</a>

<?php 

    $jumlahdata = $db->rowCOUNT("SELECT idkategori FROM tblkategori");
    $banyak=4;

    $halaman = ceil($jumlahdata / $banyak);

    if(isset($_GET['p'])){
        $p=$_GET['p'];
        $mulai=($p * $banyak) - $banyak;
    }
    else{
        $mulai=0;
    }

    $sql="SELECT * FROM tblkategori ORDER BY kategori ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);

    $no = 1 + $mulai;
?>

<h2>kategori</h2>
<table class="table table-bordered w-50">
    <thead>
        <th>No</th>
        <th>Kategori</th>
        <th>Delete</th>
        <th>Update</th>
    </thead>
    <tbody>
        <?php 
        $no = 1; 
        foreach ($row as $r): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['kategori'] ?></td>
                <td><?php echo $r['idkategori'] ?></td>
                <td><?php echo $r['idkategori'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php 
    for($i = 1; $i <= $halaman ; $i++){
        echo '<a href="?f=kategori&m=select&p=' . $i . '">' . $i . '</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>