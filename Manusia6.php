<?php
class Manusia6{
	protected $nama_saya;
	function berinama($saya){
		$this->nama_saya = $saya;
	}
}

class Teman extends Manusia6{
	public $nama_teman;
	function berinamateman($teman){
		$this->nama_teman = $teman;
	}

	function namasaya($sayalagi){
		$this->nama_saya = $sayalagi;
	}

	function getnamasaya(){
		return $this->nama_saya;
	}
}

$malasngoding = new Teman;
$malasngoding->berinama("MALAS NGODING");
$malasngoding->berinamateman("Diki");
//echo "Nama saya: " . $malasngoding->nama_saya ."<br />";
echo "Nama teman saya: " .$malasngoding->nama_teman;
$malasngoding->namasaya("SREGEP NGODING");
echo "Nama saya sekarang: " .$malasngoding->getnamasaya();