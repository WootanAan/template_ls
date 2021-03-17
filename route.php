<?php 
class Route{
	protected $alamat;

	public function pergi($value)
	{
		$this->alamat= explode('/', $value);
	}

	// buat ngetes uri
	function test_uri ()
	{
		print_r($this->alamat[0]);
	}

	public function pergi_ke()
	{
		$a = $this->alamat[0];
		$b = isset($this->alamat[1]);

		if ($a == '') {
			return 'home.php';
		} else if($a == 'terbaru_list') {
			return 'terbaru_list.php';
		} else if($a == 'populer_list') {
			return 'populer_list.php';
		} else if($a == 'projek_list') {
			return 'projek_list.php';
		} else if($a == 'tentang') {
			return 'tentang.php';
		}
		else {
			return '404.php';
		}
	}
}

$route = new Route();
?>