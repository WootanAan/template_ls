<?php

class Woy {
	protected $alamat_utama;
	protected $judul_situs;
	protected $deskripsi_situs;
	protected $aktif;
	protected $judul_halaman;

	public function set_alamat_utama($alamat)
	{
		$this->alamat_utama = $alamat;
	}

	public function alamat_situs()
	{
		return $this->alamat_utama;
	}

	public function tampilkan($tampil)
	{
		return include('tampilan/'.$tampil.".php");
	}

	public function set_judul_situs($nama)
	{
		$this->judul_situs = $nama;
	}

	public function get_judul_situs()
	{
		return $this->judul_situs;
	}

	public function set_deskripsi_situs($deskripsi)
	{
		$this->deskripsi_situs = $deskripsi;
	}

	public function get_deskripsi_situs()
	{
		return $this->deskripsi_situs;
	}

	public function ke($link)
	{
		return $this->alamat_utama.$link;
	}

	public function aktifkah($page)
	{
		$this->aktif = $page;
	}

	public function aktif()
	{
		return $this->aktif;
	}

	public function set_judul_halaman($value)
	{
		$this->judul_halaman = $value;
	}

	public function judul_halaman()
	{
		return $this->judul_halaman;
	}
}

$woy = new Woy();
?>