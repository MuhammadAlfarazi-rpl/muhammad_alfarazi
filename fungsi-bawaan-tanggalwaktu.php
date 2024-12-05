<?php

    // date()
    echo date('d-m-Y H:i:s');

    // strtotime()
    $tanggal = "06-03-2025";
    echo strtotime($tanggal);

    // mktime()
    $waktu = mktime(1, 0, 0, 11, 11, 2024);
    echo date('d-m-Y H:i:s', $waktu);

?>