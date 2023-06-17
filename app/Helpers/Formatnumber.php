<?php
function format_number($angka){
    $hasil = number_format($angka,2,',','.'). "Kg ";
return $hasil;
}
