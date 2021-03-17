<?php 
$woy->aktifkah("terbaru");
$woy->set_judul_halaman("Post Terbaru");
$woy->tampilkan("template/header");
$woy->tampilkan("terbaru_list");
$woy->tampilkan("template/footer");
?>