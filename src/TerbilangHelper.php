<?php

use RioAstamal\AngkaTerbilang\Terbilang;

if (!function_exists('terbilang')) {
    /**
     * Fungsi terbilang.
     * 
     * @param float $angka Angka yang akan diterjemahkan
     * @param string $pemisahDesimal Pemisah angka desimal dibelakang koma.
     */
    function terbilang($angka, $pemisalDesimal = '.')
    {
        return Terbilang::create($pemisalDesimal)->terbilang($angka);
    }
}
