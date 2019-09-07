<?php 
$nama="Programmer";
$jml=strlen($nama);


//substr_count untuk menghitung jumlah huruf/kalimat
$a = substr_count($nama, "a"); 
$i = substr_count($nama, "i");
$u = substr_count($nama, "u");
$e = substr_count($nama, "e");
$o = substr_count($nama, "o");

//menghitung jumlah huruf vokal
$vokal = $a+$i+$u+$e+$o;
$jml_vokal = $vokal;

echo("$nama");
echo("<br>");
echo("Huruf Vokal : $jml_vokal")
?>