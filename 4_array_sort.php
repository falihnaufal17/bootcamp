<?php

	function sort_array($data=[]){
		rsort($data);
		foreach($data as $key => $val)
		{
			echo "[" . $key . "] = " . $val . "\n";
		}
		
		return $data;
		
	}
	$data = [
		["a", "c", "b", "e", "d"],
		["g", "e", "f"]
	];
	
	
	$datalain = [
		["g", "h", "i", "j"],
		["a", "c", "b", "e", "d"],
		["g", "e", "f"]
	];
	
	$print = sort_array($data);
	var_dump($print);

?>
