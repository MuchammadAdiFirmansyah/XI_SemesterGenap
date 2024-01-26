<?php

  //PELANGGAN

    // $namapelanggan="anto";
    // $alamat="jogja";
    // $telepon=0815548989;

    // $sql="INSERT INTO pelanggan (namapelanggan,alamat,telepon) VALUES ('$namapelanggan','$alamat',$telepon)";
    // $hasil=mysqli_query($koneksi,$sql);


    $sql="SELECT * FROM pelanggan";
    $hasil=mysqli_query($koneksi,$sql);
    
    
    echo "<table border=2px>
    <thead>
    <tr>
    <th>
    PELANGGAN
    </th>
    <th>
    ALAMAT
    </th
    </tr>
    <th>
    TELEPON
    </th>
    </thead>
    <tbody>";
    
    while($row=mysqli_fetch_array($hasil)){
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";  
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "</tr>";
    }
    echo " </tbody>
        </table>";
?>