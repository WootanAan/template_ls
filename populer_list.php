<?php 
$woy->aktifkah("populer");
$woy->set_judul_halaman("Post Terpopuler");
$woy->tampilkan("template/header");
$woy->tampilkan("populer_list");
$woy->tampilkan("template/footer");
?>