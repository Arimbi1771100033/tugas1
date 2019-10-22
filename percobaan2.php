<?php
	class kendaraan{
		private $merk;
		private $harga;
		private $tipe;
		
		function __construct($merk,$harga,$tipe){
			$this->merk=$merk;
			$this->harga=$harga;
			$this->tipe=$tipe;
		}
		
		function BacaMerk(){
			return $this->merk;
		}
		
		function BacaHarga(){
			return $this->harga;
		}
		
		function BacaTipe(){
			return $this->tipe;
		}
	}
	echo"=================================================<br>";
	echo"TUGAS POLIMORPHISM<br>";
	echo"=================================================<br>";
	
	$Mobil=new kendaraan("CRV",437000000,"Turbo");
	
	echo "Merk Kendaraan = ".$Mobil->BacaMerk()."<br>";
	echo "Harga Mobil = ".$Mobil->BacaHarga()."<br>";
	echo "Tipe Kendaraan = ".$Mobil->BacaTipe()."<br>";
	echo "================================================= <br>";
	
	$Mobil2 = new kendaraan("Xpender",235000000,"Exceed M/T");
	
	echo "Merk Kendaraan = ".$Mobil2->BacaMerk()."<br>";
	echo "Harga Motor = ".$Mobil2->BacaHarga()."<br>";
	echo "Tipe Kendaraan = ".$Mobil2->BacaTipe()."<br>";
	echo "=================================================<br>";
	
	$Mobil3 = new kendaraan("Pajero Sport",500000000,"Dakar");
	
	echo "Merk Kendaraan = ".$Mobil3->BacaMerk()."<br>";
	echo "Harga Motor = ".$Mobil3->BacaHarga()."<br>";
	echo "Tipe Kendaraan = ".$Mobil3->BacaTipe()."<br>";
	echo "=================================================<br>";
?>