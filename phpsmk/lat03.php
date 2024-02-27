<?php

    

    function belajar(){
        echo "saya belajar PHP";
    }

    function luasPersegi($p = 5, $i = 2){
        $luas = $p * $i;

        echo $luas;
    }

    function luas($p = 5, $i = 2){
        $luas = $p * $i;

        echo $luas;
    }

    function output(){
        return "belajar function";
    }

    echo luas(100,3) * 5;

?>