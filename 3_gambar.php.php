<?php
	
	function cetak_gambar($angka)
	{
		for($angka;$angka<=9;$angka++){
			echo "<br>";
			echo "* ";
			for($b=1;$b<4;$b++){
				echo " = ";
			}
			
			echo " *";
		}
	}
	echo "--- panjang ---";
	echo "<br>";
	$print = cetak_gambar(5);	
	echo $print;
?>
