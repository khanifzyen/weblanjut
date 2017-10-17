<?php
class Manusia5{
	//menentukan property dengan private
	protected $nama = "malas ngoding";

	//method public
	public function tampilkan_nama(){
		return "Nama saya " . $this->nama;
	}
}

$manusiaTIF = new Manusia5;
echo $manusiaTIF->tampilkan_nama() ."<br />";
echo $manusiaTIF->nama;  //error karena aksesnya private