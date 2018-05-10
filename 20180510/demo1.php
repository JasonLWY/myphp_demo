<?php
	header('content-type:text/html; charset=utf-8');
	class people{
		public $name;
		public $age;
		public $color;

		public function jason() {
			echo "hello jasonlwy";
		}
		public function add() {
			$result = 0;
			for ($i=0; $i <11 ; $i++) { 
				# code...
				$result += $i;
			}
			return $result;
		}
	}
	$jasonlwy = new people();
	$jasonlwy->name = 'ss';
	$jasonlwy->age = 100;
	$jasonlwy->color = 'blue';
	$kk = $jasonlwy->jason();
	var_dump($kk);

	$res = $jasonlwy->add();
	echo "add last:" . $res;
?>
