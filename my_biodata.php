<?php
	function skills(){
		return $skills = array(
			"1" => "bekerja sama dengan baik dan mudah bersosialisasi",
			"2" => "menganalisa kebutuhan program",
			"3" => "menguasai CRUD Php",
			);
	}
	
	function mybiodata(){
		$school = ["highSchool" => "Smkn 1 katapang", "university" => "none"];
		
		$field = [
			'name' => 'falih naufal',
			'address' => 'jln. manglid no 127 rt 03 rw 11 desa margahayu selatan kecamatan margahayu kabupaten bandung 40226 jawa barat indonesia',
			'hobbies' => [
				'menggambar',
				'badminton',
				'mendengar lagu',
			
			],
			'is_married' => false,
			'school' => $school["highSchool"],
			'skills' => skills()
		];
		
		return json_encode($field);
	}
	
	$print = mybiodata();
	echo $print;
?>
