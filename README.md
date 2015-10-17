#Jawaban Soal Nusatekno#

###jawaban soal no 1###
segitiga.html

```html

	<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script>
			function show(){

				var type, karakter, angka;
				type = document.getElementById('type').value;
				karakter = document.getElementById('karakter').value;
				angka = document.getElementById('angka').value;
				var $result = document.getElementById('result');

				$result.innerHTML = "";
				var reverse = false;

					if(angka < 2){
						alert("!Masukan jumlah angka yang lebih besar.");
						return false;
					}

					if(type === 'B' || type === 'D'){
						reverse = true;
					}

					if(type === 'C' || type === 'D'){
						$result.setAttribute("class", "right");
					}
					else{
						$result.setAttribute("class", "");
					}

				if(reverse){

					for(i=angka;i>=1;i--){
						var resultKar = karakter.repeat(i);
						var $html = '<div>'+resultKar+'</div>';
						$result.innerHTML += $html;
					}
				}
				else{

					for(i=1;i<=angka;i++){
						var resultKar = karakter.repeat(i);
						var $html = '<div>'+resultKar+'</div>';
						$result.innerHTML += $html;
					}

				}

				

				String.prototype.repeat = function(num) {
    					return new Array(isNaN(num)? 1 : ++num).join(this);
    				}

			}

	</script>
	<style>
	   #result{
	   	width: 200px;
	   }
	   .right{
	   	 text-align: right;
	   }
	</style>
</head>
<body>
	<div>
		<div>
			<select id="type">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
		</div>
		<div>
		<label>Karakter:</label>
		<input type="text" id="karakter" name="char" value="">
		</div>
		<div>
		 <label>Jumlah:</label>
		 <input type="text" id="angka" name="jlh" value="">	
		</div>
		<button onclick="show()">show</button>

		<div id="result">
		</div>
	</div>

</body>
</html>

```


###jawaban soal no 2###
findnumber.php
```php
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
?>
```

###jawaban soal no 3###
index.php

hasil
```
a.

Total penjualan pada bulan february = Rp 12000
b.

ID Barang yang paling banyak dibeli = 2
c.

Jumlah Transaksi keseluruhan = Rp 492000
d.

Total penjualan per ID Barang.
ID Barang	Jumlah
1	120000
2	300000
3	72000
e.

Jumlah Barang dan Total Penjualan setiap transaksi.
ID Transaksi	Kode	Jumlah	Total
1	TRX/2015/0001	9	197000
2	TRX/2015/0002	2	50000
3	TRX/2015/0003	2	24000
4	TRX/2015/0004	5	112000
5	TRX/2015/0005	6	109000

```



