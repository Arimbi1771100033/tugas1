<?php
class mobil{
	private $merk;
	private $harga;
	private $warna;
	private $tipe;
	
	function __construct($merk,$harga,$warna,$tipe){
		$this ->merk=$merk;
		$this ->harga=$harga;
		$this ->warna=$warna;
		$this ->tipe=$tipe;
	}
	
	function BacaMerk(){
		return $this->merk;
	}
	
	function BacaHarga(){
		return $this->harga;
	}
	
	function BacaWarna(){
		return $this->warna;
	}
	
	function BacaTipe(){
		return $this->tipe;
	}
}

	$mobil = new mobil("Fortuner","Rp. 550000000","Putih","SRZ A/T");
	echo "Merk mobil = ".$mobil->BacaMerk()."<br>";
	echo "Harga mobil = ".$mobil->BacaHarga()."<br>";
	echo "Warna mobil = ".$mobil->BacaWarna()."<br>";
	echo "Tipe mobil = ".$mobil->BacaTipe()."<br>";
?>