<!DOCTYPE html>
<html>
<head>
	<title><?php echo Woy::get_judul_situs();?> - <?php echo Woy::judul_halaman(); ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animasi.css">
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo Woy::ke(''); ?>"><h1><?php echo Woy::get_judul_situs();?></h1></a>
			<p><?php echo Woy::get_deskripsi_situs();?></p>
		</div>
	</div>

	<!-- navbar -->
	<div class="top-nav">
		<div class="nav">
			<div>
				<a href="<?php echo Woy::ke(''); ?>">
					<span class="<?php if(Woy::aktif() == 'index') { echo 'aktif'; } ?>">Home</span>
				</a>
			</div>
			<div>
				<a href="<?php echo Woy::ke('terbaru_list'); ?>">
					<span class="<?php if(Woy::aktif() == 'terbaru') { echo 'aktif'; } ?>">Post Terbaru</span>
				</a>
			</div>
			<div>
				<a href="<?php echo Woy::ke('populer_list'); ?>">
					<span class="<?php if(Woy::aktif() == 'populer') { echo 'aktif'; } ?>">Post Populer</span>
				</a>
			</div>
			<div>
				<a href="<?php echo Woy::ke('projek_list'); ?>">
					<span class="<?php if(Woy::aktif() == 'projek') { echo 'aktif'; } ?>">Karya</span>
				</a>
			</div>
			<div>
				<a href="<?php echo Woy::ke('tentang'); ?>">
					<span class="<?php if(Woy::aktif() == 'tentang') { echo 'aktif'; } ?>">Tentang Saya</span>
				</a>
			</div>
		</div>
	</div>