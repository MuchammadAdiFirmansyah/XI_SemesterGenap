<?php

    session_start();

    echo $_SESSION['user'] = 'joni';

    echo '<br>';

    echo $_SESSION['nama'] = 'joni rambo';

    echo '<br>';

    echo $_SESSION['alamat'] = 'sidoarjo';

    echo '<br>';

    foreach ($_SESSION as $key => $value) {
        echo $key.'=>'.$value.'<br>';
    }

?>