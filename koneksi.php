<?php

$koneksi = mysqli_connect('localhost','root','','sppp');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}