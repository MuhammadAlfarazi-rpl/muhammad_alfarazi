<?php


    // Sederhana
    function kali($x, $y) {
        $hasil = $x * $y;
        return $hasil;
    }   

    echo kali(2, 5);


    // Tanpa Parameter
    function helloris () {
        echo "Hello, ris!"
    }

    helloris();

    // Nilai Default pada parameter
    function fans($fans = "Football Fans") {
        echo "Halo, $fans!";
    }

    fans();

    fans("Red Devils");

    // Pengembalian Nilai (Return)
    function kurang($x, $y){
        return $x - $y;
    }

    $hasil = kurang(10, 7);
    echo $hasil;

    // Rekrusif
    function faktorial($x) {
        if ($x <= 1) {
            return 1;
        } else {
            return $x * faktorial($x - 1);
        }
    }

    echo faktorial(10);


    // Variabel Global
    $total = 25;

    function kalidua(){
        global $total;
        $total *= 2;
    }

    kalidua();
    echo $total;


    // Closure
    $kelas = function($jurusan) {
        return "Selamat datang di Jurusan $jurusan!";
    };

    echo $kelas("RPL");

?>