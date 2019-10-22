<?php
	echo "==================== CONTOH SINGLE INHERITANCE =======================<br>";
	class BapakJoko{
		var $nama="Bapak Joko";
		function BapakJoko($n){
			$this->nama=$n;
		}
		function Hallo(){
		echo "Halo,saya $this->nama<br>";
		}
	} 	
	class Anak extends BapakJoko{
	}
	$test=new Anak("anita putri dari Bapak Joko");
	$test->Hallo();
	$test=new Anak("anfredo anak ke 2 dari Bapak Joko");
	$test->Hallo();
?>