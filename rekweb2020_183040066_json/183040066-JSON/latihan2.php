<?php 
//ambil json coba.json
$data = file_get_contents('coba.json');
//json -> array
$mahasiswa = json_decode($data,true);

var_dump($mahasiswa);
?>