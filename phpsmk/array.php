<?php

    // array dimensi
    $nama = array("joni","tejo","budi","siti",100, 2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) {
    //     echo $i;
    //     echo $nama[$i]. '<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang",
    //     "tejo" => "jakarta",
    //     "siti" => "sidoarjo"
    // );

    $nama['joni']="surabaya";
    $nama['budi']="malang";
    $nama['tejo']="jakarta";
    $nama['siti']="surabaya";
    $nama['edi']="semarang";

    var_dump($nama);

    echo "<br>";

    //echo $nama['budi'];

    foreach ($nama as $k => $v) {
        echo $k."=>".$v;
    
        echo "<br>";

    }

?>