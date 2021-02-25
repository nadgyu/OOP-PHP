<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

    $sheep = new Hewan("shaun");

        echo "Nama Hewan : $sheep->name <br>"; // "shaun"
        echo "Jumlah Kaki : $sheep->legs <br>"; // 2
        echo "Darah Dingin : $sheep->cold_blooded <br> <br>"; // false

        // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

    $kodok = new Frog("buduk");

        echo "Nama Hewan : $kodok->name <br>";
        echo "Jumlah Kaki : $kodok->legs <br>";
        echo "Darah Dingin : $kodok->cold_blooded <br>"; // false
        $kodok->jump();
        echo "<br> <br>";

     $sungkong = new Ape("kera sakit");

        echo "Nama Hewan : $sungkong->name <br>";
        echo "Jumlah Kaki : $sungkong->legs <br>";
        echo "Darah Dingin : $sungkong->cold_blooded <br>"; // false
        $sungkong->yell();
?>