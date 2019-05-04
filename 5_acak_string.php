<?php
	
	function cetak($angka)
	{
		$char = "abcdefghijklmnopqrstuvwxyz1234567890";
		$data = substr(str_shuffle($char), -32);
		
		for($i=0;$i<$angka;$i++){
			echo $data;
			echo "<br>";
		}
	}
	
	$obj = cetak(3);
	echo $obj;
?>