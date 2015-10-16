<?php 
error_reporting(E_ALL);
class short{
	
	public function findNumber($arr, $x)
	{
		$nofound = -1;

		foreach ($arr as $key => $value) {
			
			if($value == $x){
				$findKey[] = $key;
			}
			else{
				$findKey[] = -1;
			}
		}

		foreach ($findKey as $k => $v) {
			if($k == $v){
				return $k;
			}
		}

		return $nofound;
	}
}

$angka = array(3,1,2,5,6,7,8,7);
$short = new short;

echo $short->findNumber($angka, 3)."<br/>";
echo $short->findNumber($angka, 5)."<br/>";
echo $short->findNumber($angka, 7)."<br/>";
echo $short->findNumber($angka, 9)."<br/>";
