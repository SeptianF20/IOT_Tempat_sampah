<?php
if(!function_exists('format_berat')) {
    function format_berat($angka)
    {
         $hasil = number_format($angka,2,',','.') . " Kg ";
         return $hasil;
     }
 }
