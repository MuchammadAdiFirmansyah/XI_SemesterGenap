<?php

    // OPERATOR MATEMATIKA

    $a = 2;
    $b = 2;

    $c = $a + $b;

    echo $c. '<br>';

    $c = $a - $b;
    echo $c. '<br>';

    $c = $a * $b;
    echo $c. '<br>';

    $c = $a / $b;
    echo floor($c).'<br>';

    $c = $a % $b;
    echo $c.'<br>';

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c.'<br>';

    // OPERATOR INCREMENT
    $a++;
    echo $a.'<BR>';

    // OPERATOR STRING

    $kata = 'Surya';
    $kota = 'Baya';

    $hasil = $kata.$kota;

    $hasil .=' KOTA PAHLAWAN';
    echo $hasil;
?>